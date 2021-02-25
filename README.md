# zitro

## Description

This project wants to fulfill the technical test for Zitro. For that, I tried to focus on accomplished authomatic testing with Behat and PHPUnit and trying to design my application based on hexagonal architecture.


## Usage with Docker 

Run:

````
make build
````
Then go to http://localhost:8040/health-check to check all is ok.
Perhaps you have to do it as sudoer user.

## Tests

Once you build the application you can run the next command to see if the tests are passing. The suites of tests are done with Behat and PHPUnit. 
````
make run-tests
````

## Login Page

You can find the login page in http://localhost:8040. The page is very simple and its done with plain HTML and with JQuery/Ajax to do the request.

## Database

As you ask for the database is done with an XML file. You can find it at the root directory and its name is users.xml

## UML Diagram
You can find it in the root directory its name is diagram.png
