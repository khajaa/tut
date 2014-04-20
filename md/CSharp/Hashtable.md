
##Hashtable

###Namespace
```csharp
 ```
```csharp
 table["test"] = "test";
 Console.WriteLine(table["test"]);
 foreach (string key in table.Keys) {
     Console.WriteLine(key + " : " + table[key]);
 }
 ```
###Creating Property with Hashtable
        private Hashtable mFields;

        public string this[string key] {
            get {
                return (string)mFields[key];
            }
        }



