
##Web Application Architecture

###Common Architecture and Business Layer
This is useful structure of web app

-DataConnect (ExecuteQuery, ExecuteNonQuery, Etc...)
-BusinessObject(SuperClass) (Wrapper for DataConnect. Put common methods. GetRelation, GetTuple, etc)
--BusA - Inherit from super class. BusA can be collection of specific methods for Authentication Screen.
--BusB - specific methods
--BusC - specific methods
-Presentation Layer (aspx, ascx, html, etc...)


If you have time, implement common methods as web services.

###3 Tier Architecture




