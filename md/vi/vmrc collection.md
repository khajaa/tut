

###For Unix ver 01

```vi
 " author: Klaus Franken     <kfr@suse.de>
 " author: Werner Fink       <werner@suse.de> 
 " author: Florian La Roche  <florian@suse.de> 
 " version: 98/12/04
 " commented lines start with `"'
 
 " enable syntax highlighting
 " so /usr/share/vim/syntax/syntax.vim
 
 " automatically indent lines
 set noautoindent
 
 " select case-insenitiv search
 set ignorecase
 
 " show cursor line and column in the status line
 set ruler
 
 " shell to start with !
 " set shell=sh
 
 " show matching brackets
 set showmatch
 
 " display mode INSERT/REPLACE/...
 set showmode
 
 " tabstops
 set shiftwidth=4
 set tabstop=4
 
 " use ed-conform replacement syntax 
 set edcompatible
 " do not behave Vi-compatible as much as possible
 set nocompatible
 " changes special characters in search patterns
 set magic
 
 " keys in display mode
 map OA  k
 map [A  k
 map OB  j
 map [B  j
 map OD  h
 map [D  h
 map     h
 map     h
 map OC  l
 map [C  l
 map [2~ i
 map [3~ x
 map [1~ 0
 map OH  0
 map [H  0
 map [4~ $
 map OF  $
 map [F  $
 map [5~ 
 map [6~ 
 map [E  ""
 map [G  ""
 map OE  ""
 map Oo  :
 map Oj  *
 map Om  -
 map Ok  +
 map Ol  +
 "map OM  
 map Ow  7
 map Ox  8
 map Oy  9
 map Ot  4
 map Ou  5
 map Ov  6
 map Oq  1
 map Or  2
 map Os  3
 map Op  0
 map On  .
 
 " keys in insert mode
 map! Oo  :
 map! Oj  *
 map! Om  -
 map! Ok  +
 map! Ol  +
 "map! OM  
 map! Ow  7
 map! Ox  8
 map! Oy  9
 map! Ot  4
 map! Ou  5
 map! Ov  6
 map! Oq  1
 map! Or  2
 map! Os  3
 map! Op  0
 map! On  .
 
 " keys in insert/command mode
 map! <Esc>[H <Home>
 map! <Esc>OH <Home>
 map! <Esc>[F <End>
 map! <Esc>OF <End>
 map! <Esc>OA <Up>
 map! <Esc>OB <Down>
 map! <Esc>OC <Right>
 map! <Esc>OD <Left>
 map! <Esc>[3~ <Delete>
 map! <Esc>OE  <Space>
 
 " set backspace to ASCII delete
 " set remove to ANSI remove
 "if &term=="linux" || &term=="xterm"
 "  set t_kb=
 "  set t_kD=[3~
 "endif
 
 " deactivate color-mode on console
 "if &term=="linux"
 "  set term=linux-m
 "endif
 syntax on
 set nu
 set background=dark
 
 ab #b /*****************************************************************************
 ab #e *****************************************************************************/
 ab #c /****************************************************************************/
 ab #s /*--------------------------------------------------------------------------*/
 
 ab gf /**********************  global function prototype  *************************/
 ab sf /*---------------------  static function prototype  ------------------------*/
 
 ab gv /***************************  global variables  *****************************/
 ab sv /*-------------------------  static variables  -----------------------------*/
 
 
 ```
###For Windows Console 01
```vi
 set ts=4 sts=4 sw=4
 set directory=c:\\Vim\\tmp
 set backupdir=c:\\Vim\\tmp
 set incsearch
        set hlsearch
 syntax on
 set nocompatible
 ab #s //=======================================================================//
 :map <F1> <Esc>
 set background=dark
 behave mswin
 ```
###For Windows GUI version _gvimrc
```vi
 set guifont=�ͣ�_�����å�:h10:cSHIFTJIS
 "set guifont=Lucida_Console:h8
 "highlight StatusLine ctermbg=black guifg=#000000 guibg=#FFFFFF
 "highlight LineNr guifg=darkgrey
 "highlight SpecialKey guifg=grey
 "highlight Statement guifg=blue 
 "highlight Identifier guifg=darkblue 
 "highlight Comment guifg=darkred
 ```

###For Windows GUI version _vimrc
```vi
 set directory=c:\\Vim\\tmp
 set backupdir=c:\\Vim\\tmp
 set incsearch
 set nocompatible
 set nowrap
 set scrolloff=5
 source $VIMRUNTIME/vimrc_example.vim
 source $VIMRUNTIME/mswin.vim
 behave mswin
 ```
###mswin.vim


###Color Schema
```vi
 ```
```vi
 darkblue.vim
 default.vim
 delek.vim
 desert.vim
 elflord.vim
 evening.vim
 koehler.vim
 morning.vim
 murphy.vim
 pablo.vim
 peachpuff.vim
 ron.vim
 shine.vim
 slate.vim
 torte.vim
 zellner.vim
 ```

###Remember Last Cursor Position

  " When editing a file, always jump to the last known cursor position.
  " Don't do it when the position is invalid or when inside an event handler
  " (happens when dropping a file on gvim).
  autocmd BufReadPost *
    \ if line("'\"") > 0 && line("'\"") <= line("$") |
    \   exe "normal g`\"" |
    \ endif


###Avoid Tab when you copy and paste codes

```vi
 ```


