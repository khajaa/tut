
##String and Format

###Format Digit
```java
 NumberFormat formatter = new DecimalFormat("000000");
 String s = formatter.format(-1234.567);  // -001235
 // notice that the number was rounded up
 
 // The # symbol shows a digit or nothing if no digit present
 formatter = new DecimalFormat("##");
 s = formatter.format(-1234.567);         // -1235
 s = formatter.format(0);                 // 0
 formatter = new DecimalFormat("##00");
 s = formatter.format(0);                 // 00
 
 
 // The . symbol indicates the decimal point
 formatter = new DecimalFormat(".00");
 s = formatter.format(-.567);             // -.57
 formatter = new DecimalFormat("0.00");
 s = formatter.format(-.567);             // -0.57
 formatter = new DecimalFormat("#.#");
 s = formatter.format(-1234.567);         // -1234.6
 formatter = new DecimalFormat("#.######");
 s = formatter.format(-1234.567);         // -1234.567
 formatter = new DecimalFormat(".######");
 s = formatter.format(-1234.567);         // -1234.567
 formatter = new DecimalFormat("#.000000");
 s = formatter.format(-1234.567);         // -1234.567000
 
 
 // The , symbol is used to group numbers
 formatter = new DecimalFormat("#,###,###");
 s = formatter.format(-1234.567);         // -1,235
 s = formatter.format(-1234567.890);      // -1,234,568
 
 // The ; symbol is used to specify an alternate pattern for negative values
 formatter = new DecimalFormat("#;(#)");
 s = formatter.format(-1234.567);         // (1235)
 
 // The ' symbol is used to quote literal symbols
 formatter = new DecimalFormat("'#'#");
 s = formatter.format(-1234.567);         // -#1235
 formatter = new DecimalFormat("'abc'#");
 s = formatter.format(-1234.567);         // -abc1235
 ```


