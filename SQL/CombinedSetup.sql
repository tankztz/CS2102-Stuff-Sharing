-- DEPRECATED
-- DO NOT UPDATE, UPDATE DBsetup.sql instead


CREATE TABLE users(
user_id SERIAL PRIMARY KEY ,
username VARCHAR(64) NOT NULL,
mobile INT NOT NULL,
email VARCHAR(64) UNIQUE,
password VARCHAR(64) NOT NULL,
admin BOOLEAN NOT NULL,
create_time TIMESTAMP,
points NUMERIC,
address VARCHAR(64));


insert into users values (DEFAULT,'shuli','88888888','shuli@gmail.com','12345678',true,NULL,10,'PGP');
insert into users values (DEFAULT,'tx','12348765','tx@gmail.com','12348765',false,NULL,10,'PGP');
insert into users values (DEFAULT,'tz','99999999','tz@gmail.com','1234qwer',true,NULL,10,'Clementi');
insert into users values (DEFAULT,'yl','94225233','yl@gmail.com','88888888',true,NULL,10,'PGP');
insert into users values (DEFAULT,'xy','66666666','xy@gmail.com','66666666',true,NULL,10,'Clementi');


CREATE TABLE item(
item_id SERIAL PRIMARY KEY ,
name VARCHAR(64) NOT NULL,
owner INTEGER REFERENCES users(user_id),
category VARCHAR(64) NOT NULL,
status INT,
description VARCHAR(64),
photo bytea);


insert into item values (DEFAULT,'cs2102textbook','1','book','1','do not write on the book',NULL);
insert into item values (DEFAULT,'iphone xs max','2','e-device','1','hi siri',NULL);
insert into item values (DEFAULT,'dumbbell','3','equipment','1','workout',NULL);


CREATE TABLE post(
post_id SERIAL PRIMARY KEY,
title VARCHAR(64) NOT NULL,
item INTEGER NOT NULL REFERENCES item(item_id),
start_time TIMESTAMP,
end_time TIMESTAMP,
create_time TIMESTAMP DEFAULT NOW(),
description VARCHAR(64),
minimum_bid INT,
--next_successful_bid
delivery BOOLEAN NOT NULL, --{0,1}
biding_period TIMESTAMP,
status BOOLEAN);  --{expire or available}


insert into post values (DEFAULT,'textbook for rent','1','2018-10-2','2018-12-6','2018-10-1','nothing','1000',true,'2018-11-2',true);
insert into post values (DEFAULT,'try new iphone now','2','2018-10-1','2018-12-4','2018-9-18','larger screen','50000',true,'2018-11-6',true);
insert into post values (DEFAULT,'dumbbell 20kg ','3','2018-10-3','2018-11-24','2018-9-28','build muscle','4000',true,'2018-11-9',true);


CREATE TABLE bid(
bid_id SERIAL PRIMARY KEY,
bidder INTEGER NOT NULL REFERENCES users(user_id),
points NUMERIC,
status INT NOT NULL, --{successful, fail, pending}
post INTEGER NOT NULL REFERENCES post(post_id),
create_time TIMESTAMP DEFAULT NOW());


insert into bid values (DEFAULT,'4','30000','3','2','2018-10-3');
insert into bid values (DEFAULT,'5','1000','1','1','2018-10-3');
insert into bid values (DEFAULT,'5','3000','1','3','2018-10-3');


CREATE TABLE loan(
loan_id SERIAL PRIMARY KEY,
bid INTEGER NOT NULL REFERENCES bid(bid_id),
post INTEGER NOT NULL REFERENCES post(post_id),
status INT NOT NULL,
start_time TIMESTAMP NOT NULL,
end_time TIMESTAMP NOT NULL,
create_time TIMESTAMP DEFAULT Now());


insert into loan values (DEFAULT,'2','1','1','2018-10-3','2018-12-6','2018-10-3');
insert into loan values (DEFAULT,'3','3','1','2018-10-3','2018-11-24','2018-10-3');


CREATE TABLE comment( 
comment_id SERIAL PRIMARY KEY,
loan INTEGER NOT NULL REFERENCES loan(loan_id),
user_name INTEGER NOT NULL REFERENCES users(user_id),
content VARCHAR(64),
rating NUMERIC NOT NULL);


insert into comment values (DEFAULT,'1','4','good',5);
insert into comment values (DEFAULT,'2','5','vvery good',5);