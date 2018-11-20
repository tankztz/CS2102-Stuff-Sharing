# Shuli Exchange station
The system allows people to borrow or lend stuff that they own (tools, appliances, furniture or books) either free or for a fee. Users advertise stuff available (what stuff, where to pick up and return, when it is available, etc.) or can browse the available stuff and bid to borrow some stuff. The stuff owner or the system (your choice) chooses the successful bid.  Each user has an account. Administrators can create, modify and delete all entries.  Please refer to www.snapgoods.com, www.peerby.com or other stuff sharing sites for examples and data.

## Set up guide
1. Clone the repo to the htdocs of bitnami ..\Bitnami\wappstack-7.1.21-0\apache2\htdocs\
2. Use the commands in SQL folder of this repo to set up the database and add some data
3. Edit the username/password/database in ..\Bitnami\wappstack-7.1.21-0\apache2\htdocs\CS2102-Stuff-Sharing\application\config\database.php
4. Start server
5. Open browser check the website
currently available:
http://localhost/CS2102-Stuff-Sharing/index.php/users
http://localhost/CS2102-Stuff-Sharing/index.php/news

## Entity-relationship Diagram
![Alt text](doc/resource/ERDiagram.png?raw=true "ER Diagram")

Read [this report](https://github.com/tankztz/CS2102-Stuff-Sharing/blob/master/CS2102%20project.pdf) for details and screenshots
