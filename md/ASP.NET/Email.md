
##Email

###Email Sending in .NET 2.0
Now the email component is under ''System.Net.Mail'', System.Web.Mail is obsolete.
```asp.net
 	SmtpClient smtpClient = new SmtpClient();
 	MailMessage message = new MailMessage();
 	MailAddress fromAddress = new MailAddress(from);
 	smtpClient.Host = System.Configuration.ConfigurationManager.AppSettings["SMTP"];
 	smtpClient.Port = 25;
 	message.From = fromAddress;
 	message.To.Add(to);
 	message.Subject = subject;
 	message.IsBodyHtml = true;
 	message.Body = body;
 	smtpClient.Send(message);		
 }
 ```

###Email Testing
```asp.net
 <%@ Import namespace="System.Web.Mail" %>
 <%
 MailMessage message = new MailMessage();
 message.To = "test@testcom";
 message.From = "do_not_reply@test.com";
 message.Subject = "This is a test mail";
 message.BodyFormat = MailFormat.Html;
 message.Body = "Test mail";
 SmtpMail.SmtpServer = "localhost";
 // or use System.Configuration.ConfigurationSettings.AppSettings["SmtpServer"]; 
 SmtpMail.Send(message);
 %>
 ```
###Email Test Tool 2
```asp.net
 
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <%@ Import Namespace="System.Net.Mail" %>
 <%@ Import Namespace="System.IO" %>
 <script runat="server">
     public void Page_Load() {
         
         
     }
     
     //-----------------------------------------------------------------------------------------------
     public static void SendEmail(
 		string server,
 		string from,
 		string fromname,
 		string to,
 		string subjectUTF8,
 		string bodyUTF8,
 		Encoding enc) {
 
 
         SmtpClient smtpClient = new SmtpClient();
         MailMessage message = new MailMessage();
         MailAddress fromAddress = new MailAddress(from, fromname);
 
         smtpClient.Host = server;
         smtpClient.Port = 25;
         message.SubjectEncoding = enc;
         message.BodyEncoding = enc;
         message.From = fromAddress;
         message.To.Add(to);
         message.IsBodyHtml = true;
 
         if (enc != Encoding.UTF8) {
             message.Subject = UTF8ToShiftJIS(subjectUTF8);
             message.Body = UTF8ToShiftJIS(bodyUTF8);
         }
         else {
             message.Subject = subjectUTF8;
             message.Body = bodyUTF8;
         }
 
         smtpClient.Send(message);
     }
 
     //-----------------------------------------------------------------------------------------------
     /// <summary>		
     /// shiftjis=932
     /// euc=51932
     /// jis=50220
     /// </summary>
     /// <param name="utf"></param>
     /// <returns>ShiftJIS String</returns>
     public static string UTF8ToOtherEncoding(string utf, Encoding enc) {
         return enc.GetString(Encoding.Convert(Encoding.UTF8, enc, Encoding.UTF8.GetBytes(utf)));
     }
 
     public static string UTF8ToShiftJIS(string utf) {
         return UTF8ToOtherEncoding(utf, Encoding.GetEncoding(932));
     }
 
     protected void Button1_Click(object sender, EventArgs e) {
 		if (tbPassword.Text == "helloworld") {
         //string str = File.ReadAllText("_utf8test.txt", Encoding.UTF8);
         SendEmail(tbServer.Text, tbFrom.Text, tbFromName.Text, tbEmail.Text, tbSubject.Text, tbBody.Text, Encoding.GetEncoding(932));
 		}
     }
 
     protected void Button2_Click(object sender, EventArgs e) {
 		if (tbPassword.Text == "heloworld") {
         SendEmail(tbServer.Text, tbFrom.Text, tbFromName.Text, tbEmail.Text, tbSubject.Text, tbBody.Text, Encoding.UTF8);
 		}
     }
 </script>
 
 <html xmlns="http://www.w3.org/1999/xhtml" >
 <head runat="server">
     <title>Email Test</title>
 </head>
 <body>
     <form id="form1" runat="server">
     <div>
         server:<asp:TextBox ID="tbServer" runat="server" text="localhost"></asp:TextBox>
         <br />
         from name:<asp:TextBox ID="tbFromName" runat="server" text="test"></asp:TextBox>
 		<br />
 		from email:<asp:TextBox ID="tbFrom" runat="server" text="test@test.com"></asp:TextBox>
         <br />
         subject:<asp:TextBox ID="tbSubject" runat="server" text="test "></asp:TextBox>
         <br />
         body:<asp:TextBox ID="tbBody" runat="server" text="test"></asp:TextBox>
         <br />
         to email:<asp:TextBox ID="tbEmail" runat="server"></asp:TextBox><br />
 		password:<asp:TextBox ID="tbPassword" runat="server"></asp:TextBox><br />
         <asp:Button ID="Button1" runat="server" OnClick="Button1_Click" Text="SJIS" />
         <asp:Button ID="Button2" runat="server" OnClick="Button2_Click" Text="UTF8" /><br />
         <br />
         <br />
         -------------------------------- NOTE ---------------------------------<br />
         Hotemail (old) - sjis is ok, utf8 is bad<br />
         Hotmail (live) - sjis is bad, utf8 is ok<br />
         Gmail - sjis is bad, utf8 is ok<br />
         <br />
         All other carrer supports utf8<br />
     </div>
     </form>
 </body>
 </html>
 ```




