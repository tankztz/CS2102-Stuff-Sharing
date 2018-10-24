ALTER SEQUENCE users_user_id_seq RESTART WITH 1

insert into users (user_id, username, mobile, email, password, admin) values (DEFAULT, 'cs2102', '3016779446', 'cs2102@nus.com', '123456789', true);
insert into users (user_id, username, mobile, email, password, admin) values (DEFAULT, 'fbenninger1', '4345464198', 'mbarns1@mysql.com', 'UC2pBghtlp', false);
insert into users (user_id, username, mobile, email, password, admin) values (DEFAULT, 'iyashnov2', '5046215169', 'gmccullagh2@howstuffworks.com', 'ahpMnw12jOwo', false);
insert into users (user_id, username, mobile, email, password, admin) values (DEFAULT, 'kmortimer3', '7355080785', 'cavis3@uol.com.br', 'GL9DiGaBBwNc', false);
insert into users (user_id, username, mobile, email, password, admin) values (DEFAULT, 'gwooler4', '3262871738', 'mblodg4@ycombinator.com', 'fe1hXuy', false);
insert into users (user_id, username, mobile, email, password, admin) values (DEFAULT, 'adotson5', '7443616036', 'kgaylard5@wiley.com', 'z60EPYobAuOr', false);
insert into users (user_id, username, mobile, email, password, admin) values (DEFAULT, 'twinter6', '3706692915', 'weddisforth6@intel.com', 'OFsF4n', false);
insert into users (user_id, username, mobile, email, password, admin) values (DEFAULT, 'ldysart7', '8047875738', 'msheppey7@hibu.com', 'd6Hd4Tz4FUt', false);
insert into users (user_id, username, mobile, email, password, admin) values (DEFAULT, 'skimmings8', '2852590592', 'koolahan8@ameblo.jp', 'm7VP52moj', false);
insert into users (user_id, username, mobile, email, password, admin) values (DEFAULT, 'cgeldard9', '8788678738', 'tshoard9@dropbox.com', 'gOfMhjZP1k', false);
insert into users (user_id, username, mobile, email, password, admin) values (DEFAULT, 'dmonnellya', '8167640323', 'zemora@diigo.com', 'UY4uWDniwU2', false);
insert into users (user_id, username, mobile, email, password, admin) values (DEFAULT, 'dteodorob', '5758492155', 'vgorringeb@1und1.de', 'lC1CDOoIZTJ', false);
insert into users (user_id, username, mobile, email, password, admin) values (DEFAULT, 'ckirlinc', '6057563680', 'nlonghic@oracle.com', 'w29GwsmP', false);
insert into users (user_id, username, mobile, email, password, admin) values (DEFAULT, 'pwastlingd', '2483945429', 'mtallond@un.org', 'HB99yxIg50', false);
insert into users (user_id, username, mobile, email, password, admin) values (DEFAULT, 'fegere', '7522409775', 'gknowltone@eepurl.com', 'e1VyJR', false);
insert into users (user_id, username, mobile, email, password, admin) values (DEFAULT, 'tgudginf', '1558094140', 'mduttonf@seesaa.net', 'ZBPr1l', false);
insert into users (user_id, username, mobile, email, password, admin) values (DEFAULT, 'ogunbyg', '6844071493', 'apaternosterg@wordpress.com', '9DMk7lyQu2C', false);
insert into users (user_id, username, mobile, email, password, admin) values (DEFAULT, 'finnerstoneh', '4477532736', 'golehaneh@bravesites.com', 'of0xI2y', false);
insert into users (user_id, username, mobile, email, password, admin) values (DEFAULT, 'athurleyi', '9744433173', 'bscrinei@sciencedaily.com', 'AnSHacX', false);
insert into users (user_id, username, mobile, email, password, admin) values (DEFAULT, 'test', '2704164116', 'test@nus.com', '123456', true);

ALTER SEQUENCE item_item_id_seq RESTART WITH 1

insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Book', 14, 'ALL', 'useful');  --pick
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Shiratamako - Rice Flour', 6, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Lobster - Live', 5, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Salsify, Organic', 18, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Brandy - Bar', 3, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Wine - Zonnebloem Pinotage', 15, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Lettuce - Lambs Mash', 14, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Yogurt - Peach, 175 Gr', 15, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Muffin Hinge Container 6', 20, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Jolt Cola', 3, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Shirt', 2, 'ALL', 'nice'); --pick
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Cherries - Frozen', 3, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Soup Campbells Split Pea And Ham', 6, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Tequila Rose Cream Liquor', 17, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'French Kiss Vanilla', 1, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Guava', 20, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Water - Mineral, Carbonated', 2, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Vinegar - Balsamic', 1, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Sugar - Fine', 8, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Grand Marnier', 18, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Shoes', 16, 'ALL', 'good outlook'); --pick
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Wine - Muscadet Sur Lie', 2, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Pork - Tenderloin, Fresh', 10, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Ham - Smoked, Bone - In', 14, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Flour - Teff', 2, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Goldschalger', 12, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Mace Ground', 16, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Yogurt - Strawberry, 175 Gr', 2, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Sea Bass - Whole', 10, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Pepper - Scotch Bonnet', 10, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Bag', 12, 'ALL', 'large'); --pick
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Pineapple - Canned, Rings', 16, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Bread - Granary Small Pull', 1, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Mace', 6, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Pastry - Baked Cinnamon Stick', 20, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Beef - Texas Style Burger', 9, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Coffee Cup 8oz 5338cd', 11, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Cheese - Ermite Bleu', 5, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Canadian Emmenthal', 9, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Sproutsmustard Cress', 3, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Soup - Chicken And Wild Rice', 9, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Juice - Lemon', 5, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Lettuce - Frisee', 20, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Veal - Leg, Provimi - 50 Lb Max', 5, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Cheese - St. Paulin', 20, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'V8 Splash Strawberry Banana', 15, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Bread Crumbs - Japanese Style', 2, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Sping Loaded Cup Dispenser', 15, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Tuna - Bluefin', 2, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Longos - Chicken Caeser Salad', 15, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Beef - Top Sirloin - Aaa', 13, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Zucchini - Mini, Green', 11, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Spoon - Soup, Plastic', 9, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Oranges - Navel, 72', 11, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Pepper - Red Chili', 12, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Mussels - Frozen', 7, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Beef - Ground, Extra Lean, Fresh', 11, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Lemonade - Black Cherry, 591 Ml', 3, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Crackers - Soda / Saltins', 2, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Shrimp - Prawn', 19, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Fish - Halibut, Cold Smoked', 12, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Glove - Cutting', 13, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Cheese - Valancey', 5, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Nestea - Ice Tea, Diet', 5, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Sour Puss Raspberry', 12, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Bread Country Roll', 4, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Wine - White, Chardonnay', 2, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Pasta - Rotini, Colour, Dry', 4, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Yeast Dry - Fleischman', 14, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Skirt - 24 Foot', 15, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Halibut - Whole, Fresh', 4, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Cheese - Victor Et Berthold', 6, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Wine - Puligny Montrachet A.', 12, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Napkin Colour', 6, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Mushroom - Lg - Cello', 15, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Beer - Guiness', 8, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Nori Sea Weed', 18, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Soup - Campbells Beef Stew', 11, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Dragon Fruit', 9, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Compound - Passion Fruit', 3, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Soup - Knorr, Ministrone', 3, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Wine - Red, Cooking', 17, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Pork - Loin, Center Cut', 10, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Oil - Canola', 1, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Mustard - Pommery', 8, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Muffin Mix - Morning Glory', 9, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Persimmons', 8, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Longos - Chicken Curried', 16, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Stainless Steel Cleaner Vision', 17, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Langers - Mango Nectar', 14, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Wine - White, Riesling, Henry Of', 8, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Cloves - Ground', 20, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Olives - Stuffed', 8, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Yogurt - Strawberry, 175 Gr', 1, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Fish - Bones', 13, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Nantucket Apple Juice', 12, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Scotch - Queen Anne', 11, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Icecream Bar - Del Monte', 18, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Butter Balls Salted', 1, 'ALL', 'good');
insert into item (item_id, name, owner, category, description) values (DEFAULT, 'Skateboard Shoes', 18, 'ALL', 'cool');  --pick 


ALTER SEQUENCE post_post_id_seq RESTART WITH 1

insert into post (post_id, title, item, start_time, end_time, description, delivery, status) values (DEFAULT, 'useful book2', 1, '2018-08-26 16:25:22', '2018-11-10 18:56:11', 'Joq good', false, true);
insert into post (post_id, title, item, start_time, end_time, description, delivery, status) values (DEFAULT, 'nice shirt2', 11, '2018-08-03 18:52:48', '2018-12-15 09:39:44', 'Uml good', false, true);
insert into post (post_id, title, item, start_time, end_time, description, delivery, status) values (DEFAULT, 'good shoes2', 21, '2018-12-16 23:59:29', '2018-12-29 20:04:46', 'Yda good', false, true);
insert into post (post_id, title, item, start_time, end_time, description, delivery, status) values (DEFAULT, 'large bag2', 31, '2018-08-03 09:46:47', '2018-10-31 18:55:06', 'Sgk good', false, true);
insert into post (post_id, title, item, start_time, end_time, description, delivery, status) values (DEFAULT, 'cool SB shoes2', 100, '2018-08-29 02:32:47', '2018-12-11 16:08:45', 'Cki good', false, true);
insert into post (post_id, title, item, start_time, end_time, description, delivery, status) values (DEFAULT, 'useful book', 1, '2018-08-05 22:27:13', '2018-12-30 02:09:23', 'Snv good', false, false);
insert into post (post_id, title, item, start_time, end_time, description, delivery, status) values (DEFAULT, 'nice shirt', 11, '2018-02-25 22:41:40', '2018-12-01 21:55:10', 'Sai good', false, false);
insert into post (post_id, title, item, start_time, end_time, description, delivery, status) values (DEFAULT, 'good shoes', 21, '2018-03-21 18:47:58', '2018-11-18 05:06:38', 'Bqf good', false, false);
insert into post (post_id, title, item, start_time, end_time, description, delivery, status) values (DEFAULT, 'large bag', 31, '2017-10-28 05:18:54', '2018-11-22 15:12:24', 'Dva good', false, false);
insert into post (post_id, title, item, start_time, end_time, description, delivery, status) values (DEFAULT, 'cool SB shoes', 100, '2018-07-06 02:00:39', '2018-12-23 05:11:38', 'Jvb good', false, false);

insert into bid (bidder, points, post) values (15, 1, 1);
insert into bid (bidder, points, post) values (1, 2, 1);
insert into bid (bidder, points, post) values (11, 3, 1);
insert into bid (bidder, points, post) values (5, 4, 1);
insert into bid (bidder, points, post) values (18, 5, 1);
insert into bid (bidder, points, post) values (19, 2, 2);
insert into bid (bidder, points, post) values (13, 4, 2);
insert into bid (bidder, points, post) values (18, 6, 2);
insert into bid (bidder, points, post) values (10, 8, 2);
insert into bid (bidder, points, post) values (16, 10, 2);
insert into bid (bidder, points, post) values (2, 9, 3);
insert into bid (bidder, points, post) values (3, 7, 3);
insert into bid (bidder, points, post) values (4, 5, 3);
insert into bid (bidder, points, post) values (13, 3, 3);
insert into bid (bidder, points, post) values (12, 1, 3);
insert into bid (bidder, points, post) values (7, 2, 4);
insert into bid (bidder, points, post) values (15, 5, 4);
insert into bid (bidder, points, post) values (10, 9, 4);
insert into bid (bidder, points, post) values (9, 3, 4);
insert into bid (bidder, points, post) values (18, 14, 4);
insert into bid (bidder, points, post) values (14, 2, 5);
insert into bid (bidder, points, post) values (13, 3, 5);
insert into bid (bidder, points, post) values (17, 4, 5);
insert into bid (bidder, points, post) values (10, 10, 5);
insert into bid (bidder, points, post) values (19, 3, 6);
insert into bid (bidder, points, post) values (17, 4, 6);
insert into bid (bidder, points, post) values (15, 5, 6);
insert into bid (bidder, points, post) values (2, 6, 6);
insert into bid (bidder, points, post) values (3, 8, 7);
insert into bid (bidder, points, post) values (17, 7, 7);
insert into bid (bidder, points, post) values (16, 6, 7);
insert into bid (bidder, points, post) values (18, 4, 7);
insert into bid (bidder, points, post) values (16, 5, 7);
insert into bid (bidder, points, post) values (3, 4, 8);
insert into bid (bidder, points, post) values (10, 3, 8);
insert into bid (bidder, points, post) values (13, 2, 8);
insert into bid (bidder, points, post) values (20, 1, 8);
insert into bid (bidder, points, post) values (4, 4, 9);
insert into bid (bidder, points, post) values (18, 5, 9);
insert into bid (bidder, points, post) values (8, 6, 9);
insert into bid (bidder, points, post) values (7, 7, 9);
insert into bid (bidder, points, post) values (5, 5, 10);
insert into bid (bidder, points, post) values (14, 3, 10);
insert into bid (bidder, points, post) values (10, 10, 10);
insert into bid (bidder, points, post) values (2, 13, 10); 

ALTER SEQUENCE loan_loan_id_seq RESTART WITH 1

insert into loan (loan_id, bidder, post, start_time, end_time) values (DEFAULT, 2, 6, '2018-08-05 22:27:13', '2018-12-30 02:09:23');
insert into loan (loan_id, bidder, post, start_time, end_time) values (DEFAULT, 3, 7, '2018-02-25 22:41:40', '2018-12-01 21:55:10');
insert into loan (loan_id, bidder, post, start_time, end_time) values (DEFAULT, 3, 8, '2018-03-21 18:47:58', '2018-11-18 05:06:38');
insert into loan (loan_id, bidder, post, start_time, end_time) values (DEFAULT, 7, 9, '2017-10-28 05:18:54', '2018-11-22 15:12:24');
insert into loan (loan_id, bidder, post, start_time, end_time) values (DEFAULT, 2, 10, '2018-07-06 02:00:39', '2018-12-23 05:11:38');

ALTER SEQUENCE comment_comment_id_seq RESTART WITH 1

insert into comment (comment_id, loan, user_name, content, rating) values (DEFAULT, 1, 9, 'useful', 4);
insert into comment (comment_id, loan, user_name, content, rating) values (DEFAULT, 2, 3, 'not nice', 2);
insert into comment (comment_id, loan, user_name, content, rating) values (DEFAULT, 3, 9, 'quite good', 5);
insert into comment (comment_id, loan, user_name, content, rating) values (DEFAULT, 4, 12, 'not small', 3);
