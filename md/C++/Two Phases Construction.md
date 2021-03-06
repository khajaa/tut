
##Two Phases Construction

###Why Need it?
-Two Phases Construction / Destruction provides safety mechanism
--e.g. In the below example, if someone call "Create" your object again,
you can gurantee that you create new Object after "Destroy" everything.
It does not use the destructor to dispose members.
-Easy to control a bunch of objects
--e.g. Object A needs to create another object B, etc...
--e.g. Event drien model. You need to create objects dynamically

###The structure
+''Constructor'' - Just initialize member variable as ''well-known state'' (Default Value, such as 0 or NULL), ''Do not use copy constructor''
+''Destructor'' - Simply call Destroy function
+''Create'' - You assign parameters to member variables. Put Destroy function on top if you want to make sure it is clean before the creation
+''Destroy'' - If member variables are not destroyed yet, release everything, such
as allocated resources. 
Reset all values to default values, such as 0 or NULL

###Sample Code
First, MThread class holds a thread(handle) as a member.

```c++
 // MThread.h
 #ifndef MThread_h
 #define MThread_h
 
 ///////////////////////////////////////////
 #include <windows.h>
 
 ///////////////////////////////////////////
 class MThread
 	{
 	HANDLE mhThread;
 	HWND mhWnd;
 	int mPosX;
 	int mPosY;
 
 	////////////////////////////////////////
 	static void ThreadMain(void *argument);
 
 	////////////////////////////////////////
 	virtual void OnMain(void);
 
 	///////////////////////////////////////
 	public:
 	MThread(void);
 	~MThread(void);
 	bool Create(int x=100,int y=100,HWND hwnd=NULL);
 	bool Destroy(void);
 	};
 #endif // MThread_h
 ```

This is CPP File
```c++
 #include <stdio.h>
 #include <windows.h>
 #include "MThread.h"
 
 //////////////////////////////////////////////////////
 // Constructor - Just initi as default values
 //////////////////////////////////////////////////////	
 MThread::MThread(void)
 	{
 	mhThread=NULL;
 	mhWnd=NULL;
 	mPosX=0;
 	mPosY=0;
 	}
 
 //////////////////////////////////////////////////////
 // Destructor - Just call Destroy function
 //////////////////////////////////////////////////////
 MThread::~MThread(void)
 	{  Destroy();  }
 
 /////////////////////////////////////////////////////
 // Initialize member variables
 //////////////////////////////////////////////////////
 bool MThread::Create(int x,int y,HWND hwnd)
 	{
 	// Destroy First!!
 	Destroy();
 
 	mhWnd=hwnd;
 	
 	DWORD id;
 	
 	// Use call back function, "ThreadMain", for this thread
 	mhThread=CreateThread(NULL,0,(LPTHREAD_START_ROUTINE)MThread::ThreadMain
 			,this,0,&id);
 	if(mhThread==NULL)
 		{
 		// Use your debug function
 		MessageBox(NULL,"Unable to create thread","Error",MB_OK);
 		Destroy();  
 		return false;
 		}
 
 	mPosX=x;  
 	mPosY=y;	
 
 	return true;
 	}
 
 //////////////////////////////////////////////////////
 // Check if it is destroyed or not, then destroy
 //////////////////////////////////////////////////////
 bool MThread::Destroy(void)
 	{
 	if(mhThread==NULL)
 		{
 		TerminateThread(mhThread,0);
 		mhThread=NULL;
 		}
 
 	mhWnd=NULL;
 	mPosX=0;
 	mPosY=0;
 	return true;
 	}
 	
 //////////////////////////////////////////////////////
 void MThread::ThreadMain(void *argument)
 	{
 	if(argument==NULL)
 		{
 		// Error Check:
 		// 	for real version, use your debug function 
 		// 	(e.g. stderr, dump to file etc...)
 		MessageBox(NULL,"Unable to get good argument","Error",MB_OK);
 		//fprintf(stderr,"Err Msg %s(%d)",__FILE__,__LINE__);
 		return;
 		}
 
 	MThread *mainobj=(MThread *)argument;
 	
 	// Late Binding Call Back
 	mainobj->OnMain();
 	}
 	
 //////////////////////////////////////////////////////
 void MThread::OnMain(void)
 	{
 	// Draw something here
 	HDC hdc=GetDC(mhWnd);
 	for(int i=0;i<100;++i)
 		{	
 		char buf[100];
 		sprintf(buf,"Count=%d",i);
 		TextOut(hdc,mPosX,mPosY,buf,strlen(buf));
 		Sleep(100);
 		}
 	ReleaseDC(mhWnd,hdc);
 	InvalidateRect(mhWnd,NULL,TRUE);
 	}
 ```
If you want to do some other job in thread, just overwrite OnMain call back.
```c++
 #include "MThread.h"
 class MThreadOther:public MThread
 	{
 	void OnMain(void)
 		{
 MessageBox(NULL,"Now, This thread's call back is not drawing anymore.","MSG",MB_OK);
 		}
 	};
 ```
In main, you might use like this
```c++
 int WINAPI WinMain(HINSTANCE hInstance, HINSTANCE hPrevInstance,
                    LPSTR lpCmdLine, int nCmdShow)
 	{
 	MThread thread1,thread2;
 	
 	// This one will be destroy soon
 	thread1.Create(); 
 
 	Sleep(3000);
 	
 	// You do not worry about someone calls Create again
 	// Because you Destroy it first, then new thread is created.
 	thread1.Create(500,500);
 
 	thread2.Create(300,300);
 
 	// Extended version
 	MThreadOther oth; 
 	oth.Create();
 	Sleep(20000);
 	
 	return 0;
 	}
 ```


