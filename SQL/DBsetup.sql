CREATE TABLE news (
        id int NOT NULL PRIMARY KEY,
        title varchar(128) NOT NULL,
        slug varchar(128) NOT NULL,
        text text NOT NULL
);