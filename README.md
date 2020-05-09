# PHP_SportProject
## The idea of the application
Application “Sport_project” is an example of a good manager system to conduct sport events. It is possible to see and edit information about sportsmen, teams and championships as well. All information is stored in database, which was put to mysli.oamk.fi server. 
## How to use the application
On the front page, a user will see a welcome message and notification of a current date.
Above it is possible to choose from menu which action you want to run. There are four possibilities for each data table – show, add, delete, update. You can check the existing data, add new data to tables, delete rows from tables, and update any field of tables in question. Any of these actions will be executed after you click a button. 
It is also possible to check documentation file from menu.
## What configurations were made to CodeIgniter
Before CodeIgniter configuration, I have created a database on a local server, so it will be clearer to see how my codes in CodeIngniter work. All information about database, owner and password are mentioned in application/config/database.php file. 
In CodeIgniter it is necessary to create files controllers, models and views of each table of the database. Controllers are main thing of an application as it defines how requests should be handled. Models are necessary to connect to a database of an application. Views are representation of a web page and they are called from a controller. 
