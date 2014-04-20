
##DateTime

###Comparing

```csharp
 		DateTime dt2 = new DateTime(2006, 01, 23);
 ```
```csharp
 		{
 			Console.WriteLine("second date is larger than the first date");
 		}
 		else if (DateTime.Compare(dt1, dt2) == 0)
 		{
 			Console.WriteLine("second date is same as first date");
 		}
 		else
 		{
 			Console.WriteLine("second date is smaller than the first date");
 		}
 ```

###Difference
```csharp
 ```
```csharp
 
 TimeSpan span = endTime.Subtract ( startTime );
 Console.WriteLine( "Time Difference (seconds): " + span.Seconds );
 Console.WriteLine( "Time Difference (minutes): " + span.Minutes );
 Console.WriteLine( "Time Difference (hours): " + span.Hours );
 Console.WriteLine( "Time Difference (days): " + span.Days );
 ```


