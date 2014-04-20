
##LINQ

###Hello World
```csharp
 using System.Collections.Generic;
 using System.Linq;
 using System.Text;
 
 namespace TEST_3_5_VS2008 {
 	public class Program {
 		static void Main(string[] args) {
 			string[] words = { "Hello", "World", "He is a programmer", "This", "Is", "Linq", "Hell","Heaven","Good Job MS" };
 
 			var helloLinq = from word in words
 							where word.StartsWith("He")
 							select word;
 
 			foreach(string filteredWord in helloLinq) {
 				Console.WriteLine(filteredWord);
 			}
 		}
 	}// eoc
 }// eons
 
 ```
Sample Codes
http://msdn2.microsoft.com/en-us/vcsharp/aa336746.aspx




