# Online-Compiler-Web-Based-API 
•	The main objective of this compiler is to facilitate any user such that programs of respective language can be compiled and run without downloading any IDE (Integrated Development Environment) or compiler.
Run wamp and Open ide/ui/guest.html 
Install all the 5 languages in your environment to run them.
Download MinGW for C, C++.
Download Python for python.
PHP path from wamp.
Download NodeJS for NodeJS.
Replace Python's, Php paths withyour path in "ompiler.php"file in "app" folder.

And for testing database,
create a database named as registration,
create following tables in registration database:
CREATE TABLE `users` (
    `username` varchar(100) NOT NULL,
    `email` varchar(100) NOT NULL,
    `password` varchar(100) NOT NULL,
 PRIMARY KEY (`username`) 
)
CREATE TABLE saveCode (
    codeID int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `username` varchar(100) NOT NULL,
    code LARGETEXT NOT NULL,
    FOREIGN KEY(username) REFERENCES users(username)
);
ALTER TABLE savecode
ADD language varchar(10);


Enjoy coding!
