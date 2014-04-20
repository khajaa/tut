
##vi/How to use

:Note|This is ''not'' a general reference of vi usage, if you want to learn vi
from scratch, just go [[Google:http://google.com/]] and search for ''[[how to use vi:http://www.google.com/search?hl=en&q=how+to+use+vi]]''
If you are looking for a cheat sheet [[http://cac.uvi.edu/miscfaq/vi-cheat.html]]

###Apply custom indent style
put this line in file   
```vi
 ```
###Replace word / until end of line
```vi
 c$ - replace until end
 ```
###Read / Write file
```vi
 :w file2.txt - save as
 ```
###Copy & Cut within a line 
```vi
 y$ - until end
 ggyG - yank all file
 ```
gg is begining, yank, G is end of file
x is cut, so 25x means cuts 25 chars

###Copy into register
```vi
 Use the arrow keys (or h,j,k,l,w,b,$) to higlight
 Type "ay to yank into register a.
 Type "ap to paste from register a.
 ```

###Block Delete
```vi
 dab - del all block of ( )
 ```
```vi
 daB - del all block of { }
 ```
```vi
 dap - del all paragraph
 ```
###Visual Mode & Block Select
```vi
 ```
```vi
 ```
Press ''v'' and move cursor to select a section, then press ''d'' to cut (or ''y'' to copy). Go to position which you want to insert this section. These operation is very similar to Ctrl+X, Ctrl+V

```vi
 ```


e.g.Replacing the selected

After selecting the area with above command, use 
```vi
 ```
```vi
 ```
and you can replace like this
```vi
 ```
If you put g at the end, block selection is ignored (replace as many as the line contains the target word)


###Increment & Decrement Numbers
```vi
 ```
```vi
 noremap <C-L>		<C-A>
 ```

###Insert sequence of numbers
```vi
 ```
This use record function. 
Meaning
-i1<esc> - insert number 1 
-qa - start recording at register "a"
-yyp - copy the line and paste
-<C-A> - increment the number
-q - finish recording
-100@a - execute 100 times of macro which is in register "a"
```vi
 ```

or use let 
```vi
 ```
%%%Practical Example%%%
If you want to create SQL statement which inserts 100 of sequence numbers
First, type
```vi
 ```
```vi
 ```
Copy the line and move cursor to the number,
increment the number by Ctrl-A, move the cursor to the
begining of the line, and then finish recording.

After recording, do
```vi
 ```

###Recording
see :help recording for full description
baseically, use q to start/end recording.
```vi
 ```
```vi
 ```
In order to execute,
```vi
 ```
```vi
 ```
###Extract all * to the end of the file
This will extract all <h1>test</h1> and append them at the end of file
```vi
 ```
###Insert space at the begining of all lines
For all lines
```vi
 ```
For specific lines, e.g. 10-20
```vi
 ```

###Replace with groups
basically, specify the group by \(regexp\) and capture it by \number

Let's assume you have text like
```vi
 2
 3
 4
 ```
You want to insert these numbers in sql insert statement.

```vi
 ```
-^\(.*\)$ -  grab one line from the begining to the end
-\1 is the first group that was captured in above


###Search and Replace
```vi
                                     ^  ^  ^   ^  ^
 In english, this means:              |  |  |   |  |
                                      |  |  |   |  |
             From 1 to $ (end of file)   |  |   |  |
                                         |  |   |  |
             substitute -----------------/  |   |  |
                                            |   |  |
             occurrences of "old" ----------/   |  |
                                                |  |
             with occurrences of "new" --------/   |
                                                   |
             globally (i.e., all instances of "old")

```vi
 globally search for all occurrences of 'happy' and print the lines 
 ```
```vi
 :% s/old/new/g 
 search for all occurrences of 'old' on all lines and replace with 'new' 
 ```
Special characters in the text string are:
```vi
 * - matches any number of the preceding character 
 ^ - matches the beginning of the line 
 $ - matches the end of the line 
 ```
```vi
 matches any character included in 'list' 
 A backslash (\) is used to override the special meaning.
 ```
```vi
 search for 'text' 
 ?text 
 search backwards for 'text' 
 /text/+3 
 place cursor 3 lines after 'text' 
 /text/-3 
 place cursor 3 lines before 'text' 
 /text\. 
 search for 'text' 
 n - repeat last search 
 N - repeat last search in reverse direction 
 ```
%%%Confirmation%%%
Use c for confirmation
```vi
 ```

###Replace Special New Line Character Like ^M
```vi
 ```

###Delete blank line
```vi
 ```
###Scroll forward / back one screen 
```vi
 CTRL-b 
 ```
###Jump to next match blace { } or ( )
```vi
 ```

###Goto Declaration 
```vi
 ```
```vi
 // ...
 void test() {
      xxxx = 100; // type gd to jump to declaration
 }
 ```
###Marker
There are marker slots 
-a-z - Local register slots (within a same file) 
-A-Z - Global register slots (able to mark on the other file)
In order to mark, for instance
```vi
 ```
```vi
 ```
###Easy IDE Look
```vi
 ```
```vi
 ```
```vi
 ```
```vi
 ```
###File Browser
```vi
 ```
-Enter to open

press ? for help

###Multiple files
Open like
```vi
 ```
```vi
 ```
```vi
 ```

If you ommit the number, you just switch back to the last document
You can check with MDI view with
```vi
 ```
```vi
 ```
```vi
 ```
```vi
 ```
```vi
 ```
```vi
 ```
```vi
 ```

Open a file in a same window
```vi
 ```
```vi
 ```


###Split view 
```vi
 :vsp
 ```

Close window
```vi
 ```

###Jump Cursor
```vi
 b back a word 
 $ end of line 
 0 beginning of line 
    H
    M
    L
you can also use PgUp and PgDn key
```vi
 G - go to end
    
###Auto-fill:  
    in insert mode, use 
    Ctrl+P for previous similar word
    Ctrl+N for post similar word

###Clip board:  
    "*p
    "*y

###Sort
```vi
 ```
###Fix all indent
```vi
 ```
G is end
= is fix indent command

###Redirect
Insert redirected output into cursor position
```vi
 ```
###Abbreviations, Mapping Keys, and Shortcut:  
set vimrc like this

```vi
 ```
then if you type #s in insert mode, it will be replaced.

e.g2.

```vi
 ```
You can also type in command mode.
Here is ab template for me
```vi
 ab ab2 //-------------------------------------------------------------------//
 ab ab3 //================================//
 ab ab4 //--------------------------------//
 ab ab8 fprintf(stderr,"Error: %s (%d) \n", __FILE__, __LINE__);
 ab ab9 // Copyright (c) 200X, Kiichi Takeuchi zerogc.com info@zerogc.com
 ab ab0 // vim: set ts=4 sts=4 sw=4:
 ```
###Tag Jump
-Create Tag file
```vi
 ```

-Create Tag file recursivly
```vi
 ```

-You must edit with vi in same dir of tag file.
-When a cursor is on object or method, hit 
```vi
 ```
```vi
 ```
```vi
 ```
```vi
 ```
```vi
 ```
```vi
 ```
###Load custom setting:  
    create file like my_vimrc.vim
    then 
    :source my_vimrc.vim

###See set up files:  
    :scriptnames

```vi
 :colorschema blue
 ```
###Fix Indent
```vi
 ```
gg is begining, G is end of file.

###Undo/Redo
```vi
 ```
###Window Maximize
```vi
 :simalt ~r - Restore
 ```
```vi
 Alt->Space->r
 ```
###Misc
```vi
 I - Insert at the begining of the line
 . - Repeat previous (useful when you insert same stuff)
 C - Delete after cursor and insert mode
 cc - Change the whole line
 D - Delete after cursor
 |
 0 - home
 w3y - 3 words yank
 ```
```vi
 5>> - indent 5 lines
 5<< - indent back 5 lines
 G - jump to eof
 R - keep replace sequence of chars
 ```
```vi
 :set ai
 :set number
 ```
```vi
 $ - mve to the end of the line 
 ```
###other quick reference: 
```vi
 i,a,A,o,O
 J,r,w,de,yy,dd, 10yy,10dd,
 :100
 :! ls
 /word, n
 :w
 :wq
 :q!
 ~ - change upper and lower case
 ```
###links:
(Japanese)
http://pcmania.jp/~moraz/index.html    
http://www.stackasterisk.jp/tech/engineer/vi01_01.jsp
http://www.wakhok.ac.jp/~maruyama/Unix92/vi/section2.1.23.html
http://www.mediaweb.biz/database/others/vi_manual.html
http://www.wakhok.ac.jp/~kanayama/summer/02/site/node164.html
http://www.glasscom.com/tone/linux/Reference/Vi/ViReference1.htm

(English)
http://www.bris.ac.uk/is/selfhelp/documentation/vi-r2/vi-r2.htm
http://www.eng.hawaii.edu/Tutor/vi.html#map
http://www.lagmonster.org/docs/vi.html




