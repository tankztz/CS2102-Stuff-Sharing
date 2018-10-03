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

CREATE TABLE item(
item_id VARCHAR(64) PRIMARY KEY,
name VARCHAR(64) NOT NULL,
owner VARCHAR(64) REFERENCES users(user_id),
category VARCHAR(64) NOT NULL,
status INT,
description VARCHAR(64),
photo bytea);


CREATE TABLE category (
cat_id VARCHAR(64) PRIMARY KEY,
cat_name VARCHAR(64) NOT NULL);

CREATE TABLE post(
post_id VARCHAR(64) PRIMARY KEY,
title VARCHAR(64) NOT NULL,
item VARCHAR(64) NOT NULL REFERENCES item(item_id),
start_time TIMESTAMP,
end_time TIMESTAMP,
create_time TIMESTAMP DEFAULT NOW(),
description VARCHAR(64),
minimum_bid INT,
--next_successful_bid
delivery BOOLEAN NOT NULL, --{0,1}
biding_period TIMESTAMP,
status BOOLEAN);  --{expire or available}
  

CREATE TABLE bid(
bid_id VARCHAR(64) PRIMARY KEY,
bidder VARCHAR(64) NOT NULL REFERENCES users(user_id),
points NUMERIC,
status INT NOT NULL, --{successful, fail, pending}
post VARCHAR(64) NOT NULL REFERENCES post(postid),
create_time TIMESTAMP DEFAULT NOW());

CREATE TABLE loan(
loan_id VARCHAR(64) PRIMARY KEY,
bid VARCHAR(64) NOT NULL REFERENCES bid(bid_id),
post VARCHAR(64) NOT NULL REFERENCES post(post_id),
status INT NOT NULL,
start_time TIMESTAMP NOT NULL,
end_time TIMESTAMP NOT NULL,
create_time TIMESTAMP DEFAULT Now());

CREATE TABLE comment( 
comment_id VARCHAR(64) PRIMARY KEY,
loan VARCHAR(64) NOT NULL REFERENCES loan(loan_id),
user_name VARCHAR(64) NOT NULL REFERENCES users(user_id),
content VARCHAR(64),
rating NUMERIC NOT NULL);

