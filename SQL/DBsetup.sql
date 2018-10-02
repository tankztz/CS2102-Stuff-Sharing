CREATE TABLE news (
        id int NOT NULL PRIMARY KEY,
        title varchar(128) NOT NULL,
        slug varchar(128) NOT NULL,
        text text NOT NULL
);

CREATE TABLE users(
user_id VARCHAR(64) PRIMARY KEY,
username VARCHAR(64) NOT NULL,
mobile INT NOT NULL,
email VARCHAR(64) UNIQUE,
password VARCHAR(64) NOT NULL,
admin BOOLEAN NOT NULL, 
create_time TIMESTAMP,
points NUMERIC,
address VARCHAR(64));

