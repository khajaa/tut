
##String and Regex


###Base64 Encoding / Decoding
        using System.Text;

```csharp
 	ASCIIEncoding enc = new ASCIIEncoding();
 	return Convert.ToBase64String(enc.GetBytes(val));
 }
 ```
```csharp
 	ASCIIEncoding enc = new ASCIIEncoding();
 	return enc.GetString(Convert.FromBase64String(val));
 }
 ```
```csharp
 ```
###Get File Name
```csharp
 int lastPos = srcFile.LastIndexOf("\\");
 string fileName = srcFile.Substring(lastPos + 1, srcFile.Length - lastPos - 1);
 ```
When you get string from input box or database, you should trim white space
before you compare them.
```csharp
     // ...
 }
 ```
###Format with internationalization 
e.g. you can set currency format like this
```csharp
 ```
In my windows, it shows Yen sign.
So, in order to force locale information, create culture information first
```csharp
 ```
```csharp
 ```
Fixed decimal
```csharp
 ```
:Example|
-Phone format
```csharp
 ```
it comes with (). If number is 0, return string "Zero".
```csharp
 ```
```csharp
 Console.WriteLine(string.Format("{0,20:#}", 111111));
 Console.WriteLine(string.Format("{0,20:#}", 11111));
 Console.WriteLine(string.Format("{0,20:#}", 1111));
 ```
###Padding Zero
```csharp
 ```
:Warning|Make sure right argument is integer. If you put string, it does not do anything!

:References|
http://msdn.microsoft.com/library/default.asp?url=/library/en-us/cpguide/html/cpconFormattingOverview.asp?frame=true
http://www.stevex.org/CS/blogs/dottext/articles/158.aspx
http://idunno.org/displayBlog.aspx/2004071401#a2004071402-culture


###Padding Space
```csharp
 String.Format("--{0,-10}--", "test"); 	//--test      --
 ```
###Decimal Place
```csharp
 string.Format("{0:0.00}", 345.12345233); // two decimal places fixed position adding zero
 ```
###Date Format
```csharp
 ```

DateTime now = new DateTime(2006, 9, 07, 15, 06, 01, 08, DateTimeKind.Local);

now.ToString();      //"09/27/2006 15:06:01"

```csharp
 ```
Year

now.ToString("%y");   //"6"

now.ToString("yy");   //"06"

now.ToString("yyy");  //"2006"

now.ToString("yyyy"); //"2006"

```csharp
 ```
Month

now.ToString("%M");    //"9"

now.ToString("MM");    //"09"

now.ToString("MMM");   //"Sep"

now.ToString("MMMM");  //"September"

```csharp
 ```
Day

now.ToString("%d");    //"7"

now.ToString("dd");    //"07"

now.ToString("ddd");   //"Thu"

now.ToString("dddd");  //"Thursday"

```csharp
 ```
Hour

now.ToString("%h");    //"3"

now.ToString("hh");    //"03"

now.ToString("hhh");   //"03"

now.ToString("hhhh");  //"03"

now.ToString("%H");    //"15"

now.ToString("HH");    //"15"

now.ToString("HHH");   //"15"

now.ToString("HHHH");  //"15"

```csharp
 ```
Minutes

now.ToString("%m");    //"3"

now.ToString("mm");    //"03"

now.ToString("mmm");   //"03"

now.ToString("mmmm");  //"03"

```csharp
 ```
Seconds

now.ToString("%s");    //"1"

now.ToString("ss");    //"01"

now.ToString("sss");   //"01"

now.ToString("ssss");  //"01"

```csharp
 ```
Milliseconds

now.ToString("%f");    //"0"

now.ToString("ff");    //"00"

now.ToString("fff");   //"008"

now.ToString("ffff");  //"0080"

now.ToString("%F");    //""

now.ToString("FF");    //""

now.ToString("FFF");   //"008"

now.ToString("FFFF");  //"008"

```csharp
 ```
Kind

now.ToString("%K");    //"-07:00"

now.ToString("KK");    //"-07:00-07:00"

now.ToString("KKK");   //"-07:00-07:00-07:00"

now.ToString("KKKK");  //"-07:00-07:00-07:00-07:00"

// Note: The multiple K were just read as multiple instances of the

// single K

```csharp
 ```
DateTime unspecified = new DateTime(now.Ticks, DateTimeKind.Unspecified);

unspecified.ToString("%K");   //""

```csharp
 ```
DateTime utc = new DateTime(now.Ticks, DateTimeKind.Utc);

utc.ToString("%K");           //"Z"

```csharp
 ```
TimeZone

now.ToString("%z");     //"-7"

now.ToString("zz");     //"-07"

now.ToString("zzz");    //"-07:00"

now.ToString("zzzz");   //"-07:00"

```csharp
 ```
Other

now.ToString("%g");    //"A.D."

now.ToString("gg");    //"A.D."

now.ToString("ggg");   //"A.D."

now.ToString("gggg");  //"A.D."

```csharp
 ```
now.ToString("%t");    //"P"

now.ToString("tt");    //"PM"

now.ToString("ttt");   //"PM"

now.ToString("tttt");  //"PM" 

2-c. Additional Resources

Now that you understand what Standard and Custom format strings are, here is a table of Standard Format String to Custom Format String mapping:

Year Month Day Patterns:
d      = "MM/dd/yyyy"
D      = "dddd, dd MMMM yyyy"
M or m = "MMMM dd"
Y or y = "yyyy MMMM"

Time Patterns:
t      = "HH:mm"
T      = "HH:mm:ss"

Year Month Day and Time without Time Zones:
f      = "dddd, dd MMMM yyyy HH:mm"
F      = "dddd, dd MMMM yyyy HH:mm:ss"
g      = "MM/dd/yyyy HH:mm"
G      = "MM/dd/yyyy HH:mm:ss"

Year Month Day and Time with Time Zones:
o      = "yyyy'-'MM'-'dd'T'HH':'mm':'ss.fffffffK"
R or r = "ddd, dd MMM yyyy HH':'mm':'ss 'GMT'"
s      = "yyyy'-'MM'-'dd'T'HH':'mm':'ss"
u      = "yyyy'-'MM'-'dd HH':'mm':'ss'Z'"
U      = "dddd, dd MMMM yyyy HH:mm:ss"

###Generate Random String
```csharp
 StringBuilder builder = new StringBuilder();
 Random random = new Random();
 char ch ;
 for(int i=0; i<size; i++) {
 	builder.Append(Convert.ToChar(random.Next(32,127))); // contains simbol
 	//builder.Append(Convert.ToChar(random.Next(26) + 65)); // UpperCase
 	//builder.Append(Convert.ToChar(random.Next(26) + 97)); // LowerCase
 }
 return builder.ToString();
 }
 ```

###Regex Example
```csharp
 Match match = regex.Match(mSourceLine);
 if (match.Success) {
 // = match.Groups[1].Value
 // match.NextMatch()
 }
 ```




