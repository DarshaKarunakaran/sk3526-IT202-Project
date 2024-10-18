CREATE TABLE BookProducts (
BookProductID        INT(11)        NOT NULL,
BookProductCode      VARCHAR(10)    NOT NULL   UNIQUE,
BookProductName      VARCHAR(255)   NOT NULL,
BookProductAuthor    VARCHAR(255)   NOT NULL,
BookDescription      TEXT           NOT NULL,
BookCategoryID       INT(11)        NOT NULL,
BookWholesalePrice   DECIMAL(10,2)  NOT NULL,
BookListPrice        DECIMAL(10,2)  NOT NULL,
DateCreated            DATETIME       NOT NULL,
PRIMARY KEY ( BookProductID )
);
INSERT INTO BookProducts
(BookProductID, BookProductCode, BookProductName, BookProductAuthor, BookDescription, BookCategoryID, BookWholesalePrice, BookListPrice, DateCreated)
VALUES
(1000, 'PERCY', 'The Lightning Thief', 'Rick Riordan', "The Lightning Thief is a young adult fantasy novel about a 12-year-old boy who discovers he is a demigod and must return Zeus's stolen lightning bolt to prevent a war between the gods", 100, 11.99, 14.99, NOW());
INSERT INTO BookProducts
(BookProductID, BookProductCode, BookProductName, BookProductAuthor, BookDescription, BookCategoryID, BookWholesalePrice, BookListPrice, DateCreated)
VALUES
(1001, 'HARRY', 'Harry Potter', 'JK Rowling', 'The Harry Potter series is about an orphan boy who discovers he is a wizard and attends Hogwarts School of Witchcraft and Wizardry', 100, 8.99, 10.99, NOW());

INSERT INTO BookProducts
(BookProductID, BookProductCode, BookProductName, BookProductAuthor, BookDescription, BookCategoryID, BookWholesalePrice, BookListPrice, DateCreated)
VALUES
(1002, 'POP', 'The Poppy Wars', 'RF Kuang', 'The Poppy War, a grimdark fantasy, draws its plot and politics from mid-20th-century China, with the conflict in the novel based on the Second Sino-Japanese War', 100, 6.99, 8.99, NOW());

INSERT INTO BookProducts
(BookProductID, BookProductCode, BookProductName, BookProductAuthor, BookDescription, BookCategoryID, BookWholesalePrice, BookListPrice, DateCreated)
VALUES
(2000, 'ATOM', 'Atomic Habits', "James Clear", "This bestselling self-help book is one that focuses on the power of small, consistent changes to improve one's life.", 200, 7.99, 12.99, NOW());

INSERT INTO BookProducts
(BookProductID, BookProductCode, BookProductName, BookProductAuthor,BookDescription, BookCategoryID, BookWholesalePrice, BookListPrice, DateCreated)
VALUES
(2001, 'IKI', 'Ikigai', 'Hector Garcia',"Ikigai explores the Japanese concept of finding one's purpose in life by analyzing the habits and beliefs of the world's longest-living people.", 200, 6.99, 8.99, NOW());

INSERT INTO BookProducts
(BookProductID, BookProductCode, BookProductName, BookProductAuthor,BookDescription, BookCategoryID, BookWholesalePrice, BookListPrice, DateCreated)
VALUES
(2002, 'REL', 'Self-Reliance', 'Ralph Waldo Emmerson','This book encourages readers to trust their own instincts and ideas, and avoid conformity', 200, 7.99, 12.99, NOW());

INSERT INTO BookProducts
(BookProductID, BookProductCode, BookProductName, BookProductAuthor,BookDescription, BookCategoryID, BookWholesalePrice, BookListPrice, DateCreated)
VALUES
(3000, 'LAB', 'The Food Lab', "Kenji Lopez-Alt",'This book explains the science of cooking through recipes, instructions, and explanations', 300, 15.99, 18.99, NOW());

INSERT INTO BookProducts
(BookProductID, BookProductCode, BookProductName, BookProductAuthor, BookDescription, BookCategoryID, BookWholesalePrice, BookListPrice, DateCreated)
VALUES
(3001, 'BET', 'Betty Crocker Cookbook', "Betty Crock Editors",'The book made extensive use of photography and charts to make its techniques accessible to beginning cooks.', 300, 15.99, 18.99, NOW());

INSERT INTO BookProducts
(BookProductID, BookProductCode, BookProductName, BookProductAuthor,BookDescription, BookCategoryID, BookWholesalePrice, BookListPrice, DateCreated)
VALUES
(3002, 'MAG', 'Magnolia Table', "Joanna Gaines",'Magnolia Table by Joanna Gaines is a collection of family recipes and personal stories.', 300, 15.99, 18.99, NOW());

INSERT INTO BookProducts
(BookProductID, BookProductCode, BookProductName, BookProductAuthor,BookDescription, BookCategoryID, BookWholesalePrice, BookListPrice, DateCreated)
VALUES
(4000, 'DUNE', 'Children Of Dune', 'Frank Herbert','It tells the story of young Paul Atreides, whose family accepts the stewardship of the planet Arrakis.', 400, 6.99, 7.99, NOW());

INSERT INTO BookProducts
(BookProductID, BookProductCode, BookProductName, BookProductAuthor,BookDescription, BookCategoryID, BookWholesalePrice, BookListPrice, DateCreated)
VALUES
(4001, 'DIV', 'Divergent', 'Veronica Roth',"In Divergent, the story follows Beatrice Prior, a teenager who discovers she is Divergent, meaning she doesn't fit into any one of the five factions that divide her post-apocalyptic Chicago society", 400, 6.99, 7.99, NOW());

INSERT INTO BookProducts
(BookProductID, BookProductCode, BookProductName, BookProductAuthor, BookDescription, BookCategoryID, BookWholesalePrice, BookListPrice, DateCreated)
VALUES
(4002, 'TIME', 'This is How You Lose The Time War', 'Amal El-Mohtar','An unlikely correspondence between two rival agents hellbent on securing the best possible future for their warring factions.', 400, 6.99, 7.99, NOW());
INSERT INTO BookProducts
(BookProductID, BookProductCode, BookProductName, BookProductAuthor, BookDescription, BookCategoryID, BookWholesalePrice, BookListPrice, DateCreated)
VALUES
(5000, 'FRIDA', 'Frida: A Biography of Frida Kahlo', 'Hayden Herrera', 'This books focuses on the life and struggles of Frida Kahlo.', 500, 15.99, 17.99, NOW());

INSERT INTO BookProducts
(BookProductID, BookProductCode, BookProductName, BookProductAuthor, BookDescription, BookCategoryID, BookWholesalePrice, BookListPrice, DateCreated)
VALUES
(5001, 'SEUSS', 'Becoming Dr. Seuss', 'Brian Jones', 'A Biography of the life of Dr. Seuss written by Brian Jones.', 500, 15.99, 17.99, NOW());

INSERT INTO BookProducts
(BookProductID, BookProductCode, BookProductName, BookProductAuthor, BookDescription, BookCategoryID, BookWholesalePrice, BookListPrice, DateCreated)
VALUES
(5002, 'CLEO', 'Cleopatra: A Life', 'Stacy Schiff', 'The Pulitzer Prize-winning biographer brings to life the most intriguing woman in the history of the world: Cleopatra, the last queen of Egypt.
', 500, 15.99, 17.99, NOW());


UPDATE BookProducts
SET BookDescription = 'The Lightning Thief is a young adult fantasy novel about a 12-year-old boy who discovers he is a demigod. He must return Zeus\'s stolen lightning bolt to prevent a war between the gods.'
WHERE BookProductCode = 'PERCY';

UPDATE BookProducts
SET BookDescription = 'The Harry Potter series is about an orphan boy who discovers he is a wizard. He attends Hogwarts School of Witchcraft and Wizardry, where he learns about friendship, bravery, and the battle against dark forces.'
WHERE BookProductCode = 'HARRY';

UPDATE BookProducts
SET BookDescription = 'The Poppy War is a grimdark fantasy that draws its plot and politics from mid-20th-century China. The conflict in the novel is based on the Second Sino-Japanese War and explores the effects of war on its characters.'
WHERE BookProductCode = 'POP';

UPDATE BookProducts
SET BookDescription = 'This bestselling self-help book focuses on the power of small, consistent changes to improve one\'s life. It provides practical strategies for building good habits and breaking bad ones.'
WHERE BookProductCode = 'ATOM';

UPDATE BookProducts
SET BookDescription = 'Ikigai explores the Japanese concept of finding one\'s purpose in life. The book analyzes the habits and beliefs of the world\'s longest-living people, providing insights into living a fulfilling life.'
WHERE BookProductCode = 'IKI';

UPDATE BookProducts
SET BookDescription = 'This book encourages readers to trust their own instincts and ideas. Emerson argues that true fulfillment comes from individuality and self-discovery.'
WHERE BookProductCode = 'REL';

UPDATE BookProducts
SET BookDescription = 'This book explains the science of cooking through recipes, instructions, and explanations. It helps cooks of all levels understand the why behind the methods, making cooking easier and more enjoyable.'
WHERE BookProductCode = 'LAB';

UPDATE BookProducts
SET BookDescription = 'This classic cookbook made extensive use of photography and charts to make its techniques accessible to beginning cooks. It features a wide variety of recipes that are simple yet delicious.'
WHERE BookProductCode = 'BET';

UPDATE BookProducts
SET BookDescription = 'Magnolia Table by Joanna Gaines is a collection of family recipes and personal stories. Each recipe is designed to bring family and friends together around the table.'
WHERE BookProductCode = 'MAG';

UPDATE BookProducts
SET BookDescription = 'Children Of Dune tells the story of young Paul Atreides, whose family accepts the stewardship of the planet Arrakis. The novel explores themes of power, responsibility, and the complexities of leadership.'
WHERE BookProductCode = 'DUNE';

UPDATE BookProducts
SET BookDescription = 'In Divergent, the story follows Beatrice Prior, a teenager who discovers she is Divergent. This means she doesn\'t fit into any one of the five factions that divide her post-apocalyptic Chicago society, leading her on a journey of self-discovery.'
WHERE BookProductCode = 'DIV';

UPDATE BookProducts
SET BookDescription = 'An unlikely correspondence forms between two rival agents who are hellbent on securing the best possible future for their warring factions. Their letters reveal a profound connection that transcends time and space.'
WHERE BookProductCode = 'TIME';

UPDATE BookProducts
SET BookDescription = 'This biography focuses on the life and struggles of Frida Kahlo. It delves into her artistic legacy and the personal challenges she faced throughout her life.'
WHERE BookProductCode = 'FRIDA';

UPDATE BookProducts
SET BookDescription = 'A Biography of the life of Dr. Seuss, written by Brian Jones. It explores his creative journey and the beloved characters he brought to life through his books.'
WHERE BookProductCode = 'SEUSS';

UPDATE BookProducts
SET BookDescription = 'The Pulitzer Prize-winning biographer brings to life the most intriguing woman in the history of the world: Cleopatra, the last queen of Egypt. This biography examines her reign, her relationships, and her lasting impact on history.'
WHERE BookProductCode = 'CLEO';

SELECT * from `BookProducts`