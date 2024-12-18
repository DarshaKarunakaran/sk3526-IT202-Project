/*
Name: Saidarsha Karunakaran
Date: 10/2/24
Course: IT202
Section: 001
Assignment Name: IT-202 Phase 1 Assignment: Login and Logout
Email: sk3526@njit.edu
*/
CREATE TABLE BooksManagers (
 BooksManagerID     INT(11)        NOT NULL   AUTO_INCREMENT,
 emailAddress           VARCHAR(255)   NOT NULL   UNIQUE,
 password               VARCHAR(64)    NOT NULL,
  pronouns               VARCHAR(60)    NOT NULL,
  firstName              VARCHAR(60)    NOT NULL,
 lastName               VARCHAR(60)    NOT NULL,
 dateCreated            DATETIME       NOT NULL,
 PRIMARY KEY (BooksManagerID)
);

INSERT INTO BooksManagers (emailAddress, password, pronouns, firstName, lastName, dateCreated)
VALUES
('marissa@lunar.com', SHA2('pass123', 256), 'She/Her', 'Marissa', 'Meyers', NOW());

INSERT INTO BooksManagers (emailAddress, password, pronouns, firstName, lastName, dateCreated)
VALUES
('rfkuang@book.com', SHA2('pass123', 256), 'She/Her', 'RF', 'Kuang', NOW());
INSERT INTO BooksManagers (emailAddress, password, pronouns, firstName, lastName, dateCreated)
VALUES
('brandon@book.com', SHA2('pass123', 256), 'He/Him', 'Brandon', 'Sanderson', NOW());

INSERT INTO BooksManagers (emailAddress, password, pronouns, firstName, lastName, dateCreated)
VALUES
('sarah@book.com', SHA2('pass123', 256), 'She/Her', 'Sarah', 'Waters', NOW());