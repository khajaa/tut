
##Eclipse

###Setting for Django

This guide assumes you?ve already installed Eclipse, PyDev, Python and Django. It also assumes you?re using Eclipse 3.2, PyDev 1.2.4, Django 0.95 and Python 2.4.

- Go to Window->Preferences->Preferences->PyDev->Python Interpretter and add the django source file to the PYTHONPATH settings.
- Create a new PyDev pyhon project. Make sure you uncheck the ?create src folder? option.
- Create project on the command line using django e.g. django-admin.py startproject mysite
- In your newly created project directory create a src directory in it, and move the django generated source files here
- In eclipse, right-click your project and select refresh
- Right-click on the project and select Properties->PyDev - PYTHONPATH, and add your src folder to the project source settings

That should be it. I still get red underlines on the Django source imports even thought PyDev seems to know about them ? to test this is working properly, open up your urls.py file and ctrl click on the patterns call ? it should take you to defaults.py.

Now you can go ahead and create your database & super user.
Launching to built-in server

Open up manage.py and hit F9. This should print out the usage information for the server. To actually start the server, select Run->Run..., and in the Arguments tab for manage.py enter runserver --noreload. The noreload argument gives you output.


###Shortcuts
%%%Search%%%
-alt + / = incremental search
-ctrl + space = code assist

##Reference
http://magpiebrain.com/blog/2006/10/09/using-eclipse-and-pydev-for-django/





