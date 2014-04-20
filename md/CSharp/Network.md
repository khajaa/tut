
##Network

###HTTP GET (WebClient ver)
```csharp
 System.IO.Stream st = wc.OpenRead(tbURL.Text);
 System.IO.StreamReader sr = new System.IO.StreamReader(st);
 //,  System.Text.Encoding.GetEncoding("x-euc-jp"));
 tbResult.Text = sr.ReadToEnd();
 st.Close();
 ```
###HTTP GET (Async, WebRequest ver)
```csharp
 System.Web;
 System.IO;
 ```
```csharp
 try {
 	WebRequest webReq = HttpWebRequest.Create(tbURL.Text);
 	webReq.Method = "GET"; 
 	webReq.Timeout = 3000; // 3 sec
 	webReq.Proxy = System.Net.WebProxy.GetDefaultProxy(); 
 	AsyncCallback callBack = new AsyncCallback(this.DownloadCallBack); 
 	IAsyncResult r = webReq.BeginGetResponse(callBack, webReq);
 }
 catch (Exception ex) {
 	tbResult.Text = ex.Message; 
 }
 	
 }
 
 private void DownloadCallBack(IAsyncResult ar) {
 
 HttpWebRequest req = (HttpWebRequest) ar.AsyncState;
 HttpWebResponse response = (HttpWebResponse) req.EndGetResponse(ar);
 
 //Encoding enc = System.Text.Encoding.GetEncoding("x-euc-jp");
 StreamReader sr = new StreamReader(response.GetResponseStream());//, enc);
 
 string str = sr.ReadToEnd();
 sr.Close();
    
 tbResult.Text = str;
 }
 ```


