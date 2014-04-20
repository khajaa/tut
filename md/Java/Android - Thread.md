
##Android - Thread

###Interact with UI controls from different thread (or different scope)

Sharing UI controls in member variables is ok but when you touch the object from non-main thread, it will warn in runtime. In that case, wrap your code like this below using inline class:

```java
     public void run() {
        mTextView.setText("hello");
    }
 });
 ```

If you give some input from outside, you need to specify final keyword.

```java
 runOnUiThread(new Runnable() {
     public void run() {
        mTextView.setText("Result: " + val);
    }
 });
 }
 ```






