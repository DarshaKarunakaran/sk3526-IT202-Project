CREATE TABLE BookCategories (
BookCategoryID       INT(11)        NOT NULL,
BookCategoryCode     VARCHAR(255)   NOT NULL   UNIQUE,
BookCategoryName     VARCHAR(255)   NOT NULL,
DateCreated            DATETIME       NOT NULL,
PRIMARY KEY ( BookCategoryID )
);

INSERT INTO BookCategories
(BookCategoryID, BookCategoryCode, BookCategoryName, DateCreated)
VALUES
(100, 'FIC', 'Fiction', NOW());
INSERT INTO BookCategories
(BookCategoryID, BookCategoryCode, BookCategoryName, DateCreated)
VALUES
(200, 'SLF', 'Self-Help', NOW());

INSERT INTO BookCategories
(BookCategoryID, BookCategoryCode, BookCategoryName, DateCreated)
VALUES
(300, 'COOK', 'Cookbook', NOW());

INSERT INTO BookCategories
(BookCategoryID, BookCategoryCode, BookCategoryName, DateCreated)
VALUES
(400, 'SCIFI', 'Science Fiction Series', NOW());

INSERT INTO BookCategories
(BookCategoryID, BookCategoryCode, BookCategoryName, DateCreated)
VALUES
(500, 'BIO', 'Biography', NOW());

ALTER TABLE BookCategories
ADD BookShelfNumber INT(11) NOT NULL;

UPDATE BookCategories
SET BookShelfNumber = 101
WHERE BookCategoryID = 100;

UPDATE BookCategories
SET BookShelfNumber = 202
WHERE BookCategoryID = 200;

UPDATE BookCategories
SET BookShelfNumber = 303
WHERE BookCategoryID = 300;

UPDATE BookCategories
SET BookShelfNumber = 404
WHERE BookCategoryID = 400;

UPDATE BookCategories
SET BookShelfNumber = 505
WHERE BookCategoryID = 500;

SELECT * from BookCategories