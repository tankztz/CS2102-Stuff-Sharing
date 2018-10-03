/*users*/
/*
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
*/

insert into users values ('1','shuli','88888888','shuli@gmail.com','12345678',true,NULL,10,'PGP');
insert into users values ('2','tx','12348765','tx@gmail.com','12348765',false,NULL,10,'PGP');
insert into users values ('3','tz','99999999','tz@gmail.com','1234qwer',true,NULL,10,'Clementi');
insert into users values ('4','yl','94225233','yl@gmail.com','88888888',true,NULL,10,'PGP');
insert into users values ('5','xy','66666666','xy@gmail.com','66666666',true,NULL,10,'Clementi');

/*
CREATE TABLE item(
item_id VARCHAR(64) PRIMARY KEY,
name VARCHAR(64) NOT NULL,
owner VARCHAR(64) REFERENCES users(user_id),
category VARCHAR(64) NOT NULL,
status INT,
description VARCHAR(64),
photo bytea);
*/

insert into item values ('1','cs2102textbook','1','book','1','do not write on the book',NULL);
insert into item values ('2','iphone xs max','2','e-device','1','hi siri',NULL);
insert into item values ('3','dumbbell','3','equipment','1','workout',NULL);

/*
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
*/

insert into post values ('1','textbook for rent','1','2018-10-2','2018-12-6','2018-10-1','nothing','1000',true,'2018-11-2',true);
insert into post values ('2','try new iphone now','2','2018-10-1','2018-12-4','2018-9-18','larger screen','50000',true,'2018-11-6',true);
insert into post values ('3','dumbbell 20kg ','3','2018-10-3','2018-11-24','2018-9-28','build muscle','4000',true,'2018-11-9',true);

/*
CREATE TABLE bid(
bid_id VARCHAR(64) PRIMARY KEY,
bidder VARCHAR(64) NOT NULL REFERENCES users(user_id),
points NUMERIC,
status INT NOT NULL, --{successful, fail, pending}
post VARCHAR(64) NOT NULL REFERENCES post(postid),
create_time TIMESTAMP DEFAULT NOW());
*/

insert into bid values ('1','4','30000','3','2','2018-10-3');
insert into bid values ('2','5','1000','1','1','2018-10-3');
insert into bid values ('3','5','3000','1','3','2018-10-3');

/*
CREATE TABLE loan(
loan_id VARCHAR(64) PRIMARY KEY,
bid VARCHAR(64) NOT NULL REFERENCES bid(bid_id),
post VARCHAR(64) NOT NULL REFERENCES post(post_id),
status INT NOT NULL,
start_time TIMESTAMP NOT NULL,
end_time TIMESTAMP NOT NULL,
create_time TIMESTAMP DEFAULT Now());
*/

insert into loan values ('1','2','1','1','2018-10-3','2018-12-6','2018-10-3');
insert into loan values ('2','3','3','1','2018-10-3','2018-11-24','2018-10-3');

/*
CREATE TABLE comment( 
comment_id VARCHAR(64) PRIMARY KEY,
loan VARCHAR(64) NOT NULL REFERENCES loan(loan_id),
user_name VARCHAR(64) NOT NULL REFERENCES users(user_id),
content VARCHAR(64),
rating NUMERIC NOT NULL);
*/

insert into comment values ('1','1','4','good',5);
insert into comment values ('2','2','5','vvery good',5);