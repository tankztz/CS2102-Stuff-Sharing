CREATE TABLE users(
user_id SERIAL PRIMARY KEY ,
username VARCHAR(64) NOT NULL,
mobile VARCHAR(64) NOT NULL,
email VARCHAR(64) UNIQUE,
password VARCHAR(64) NOT NULL,
admin BOOLEAN NOT NULL,
points NUMERIC,
address VARCHAR(64));


CREATE TABLE item(
item_id SERIAL PRIMARY KEY ,
name VARCHAR(64) NOT NULL,
owner INTEGER REFERENCES users(user_id),
category VARCHAR(64) NOT NULL,
description VARCHAR(64),
photo bytea);


CREATE TABLE post(
post_id SERIAL PRIMARY KEY,
title VARCHAR(64) NOT NULL,
item INTEGER NOT NULL REFERENCES item(item_id),
start_time TIMESTAMP,
end_time TIMESTAMP,
create_time TIMESTAMP DEFAULT NOW(),
description VARCHAR(200),
minimum_bid INT,
delivery BOOLEAN NOT NULL,
terminate_time TIMESTAMP,
status BOOLEAN);  --{expire or available}
  

CREATE TABLE bid(
bidder INTEGER NOT NULL REFERENCES users(user_id),
post INTEGER NOT NULL REFERENCES post(post_id),
points NUMERIC,
create_time TIMESTAMP DEFAULT NOW());

CREATE TABLE loan(
loan_id SERIAL PRIMARY KEY,
bidder INTEGER NOT NULL REFERENCES users(user_id),
post INTEGER NOT NULL REFERENCES post(post_id),
end_time TIMESTAMP NOT NULL,
create_time TIMESTAMP DEFAULT Now());


CREATE TABLE comment( 
comment_id SERIAL PRIMARY KEY,
loan INTEGER NOT NULL REFERENCES loan(loan_id),
user_name INTEGER NOT NULL REFERENCES users(user_id),
content VARCHAR(200),
rating NUMERIC NOT NULL CHECK (rating>=0 AND rating<=5));

