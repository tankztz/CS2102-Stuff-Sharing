
insert into users values ('1','shuli','88888888','shuli@gmail.com','12345678',true,NULL,10,'PGP');
insert into users values ('2','tx','12348765','tx@gmail.com','12348765',false,NULL,10,'PGP');
insert into users values ('3','tz','99999999','tz@gmail.com','1234qwer',true,NULL,10,'Clementi');
insert into users values ('4','yl','94225233','yl@gmail.com','88888888',true,NULL,10,'PGP');
insert into users values ('5','xy','66666666','xy@gmail.com','66666666',true,NULL,10,'Clementi');

insert into item values ('1','cs2102textbook','1','book','1','do not write on the book',NULL);
insert into item values ('2','iphone xs max','2','e-device','1','hi siri',NULL);
insert into item values ('3','dumbbell','3','equipment','1','workout',NULL);


insert into post values ('1','textbook for rent','1','2018-10-2','2018-12-6','2018-10-1','nothing','1000',true,'2018-11-2',true);
insert into post values ('2','try new iphone now','2','2018-10-1','2018-12-4','2018-9-18','larger screen','50000',true,'2018-11-6',true);
insert into post values ('3','dumbbell 20kg ','3','2018-10-3','2018-11-24','2018-9-28','build muscle','4000',true,'2018-11-9',true);

insert into bid values ('1','4','30000','3','2','2018-10-3');
insert into bid values ('2','5','1000','1','1','2018-10-3');
insert into bid values ('3','5','3000','1','3','2018-10-3');

insert into loan values ('1','2','1','1','2018-10-3','2018-12-6','2018-10-3');
insert into loan values ('2','3','3','1','2018-10-3','2018-11-24','2018-10-3');

insert into comment values ('1','1','4','good',5);
insert into comment values ('2','2','5','vvery good',5);