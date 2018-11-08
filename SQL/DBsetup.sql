CREATE TABLE users(
user_id SERIAL PRIMARY KEY ,
username VARCHAR(64) NOT NULL,
mobile VARCHAR(64) NOT NULL,
email VARCHAR(64) UNIQUE,
password VARCHAR(64) NOT NULL,
admin BOOLEAN NOT NULL,
points NUMERIC DEFAULT 20 CHECK (points >= 0),
address VARCHAR(64));


CREATE TABLE item(
item_id SERIAL PRIMARY KEY ,
name VARCHAR(64) NOT NULL,
owner INTEGER REFERENCES users(user_id) ON DELETE CASCADE,
category VARCHAR(64) NOT NULL DEFAULT 'ALL',
description VARCHAR(64),
photo bytea);


CREATE TABLE post(
post_id SERIAL PRIMARY KEY,
title VARCHAR(64) NOT NULL,
item INTEGER NOT NULL REFERENCES item(item_id) ON DELETE CASCADE,
start_time TIMESTAMP DEFAULT NOW(),
end_time TIMESTAMP,
description VARCHAR(200),
delivery BOOLEAN NOT NULL,
availability BOOLEAN);
  

CREATE TABLE bid(
bidder INTEGER NOT NULL REFERENCES users(user_id) ON DELETE CASCADE,
post INTEGER NOT NULL REFERENCES post(post_id) ON DELETE CASCADE,
points NUMERIC CHECK (points >= 0),
create_time TIMESTAMP DEFAULT NOW(),
PRIMARY KEY(bidder, post));

CREATE TABLE loan(
loan_id SERIAL PRIMARY KEY,
bidder INTEGER NOT NULL REFERENCES users(user_id) ON DELETE CASCADE,
post INTEGER NOT NULL REFERENCES post(post_id) ON DELETE CASCADE,
start_time TIMESTAMP DEFAULT Now(),
end_time TIMESTAMP NOT NULL);


CREATE TABLE comment( 
comment_id SERIAL PRIMARY KEY,
loan INTEGER NOT NULL REFERENCES loan(loan_id) ON DELETE CASCADE,
user_name INTEGER NOT NULL REFERENCES users(user_id) ON DELETE CASCADE,
content VARCHAR(200),
rating NUMERIC NOT NULL CHECK (rating>=0 AND rating<=5));

