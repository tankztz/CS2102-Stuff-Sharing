SELECT * 
FROM item
WHERE owner = 68;

SELECT bidder, points, create_time 
FROM bid
WHERE post = 68
ORDER BY points DESC;

SELECT p.post_id
FROM post p, item i
WHERE p.item = i.item_id 
AND  i.owner = 68 
AND p.availability = 'true';

SELECT c.* 
FROM comment c, loan l, post p, item i
WHERE c.loan = l.loan_id
AND l.post = p.post_id
AND p.item = i.item_id
AND i.owner = 68;

SELECT b.points, p.*, 
CASE 
WHEN loan_id IS NOT NULL THEN 'successful' 
WHEN (loan_id IS NULL AND p.availability = 'false') THEN 'fail'
ELSE 'pending' END AS bidding_status
FROM bid b
INNER JOIN post p ON (b.bidder = 68 AND b.post = p.post_id)
LEFT JOIN loan l ON (b.bidder = l.bidder AND b.post = l.post);

SELECT u.*, AVG(rating) as avg_rating 
FROM users u
LEFT JOIN item i ON u.user_id  = i.owner
LEFT JOIN post p ON i.item_id = p.item
LEFT JOIN loan l ON p.post_id = l.post
LEFT JOIN comment c ON l.loan_id = c.loan
GROUP BY u.user_id, u.username, u.mobile, u.email, u.password, u.admin, u.points, u.address
ORDER BY CASE WHEN AVG(rating) IS NULL THEN 0 ELSE 1 END DESC, avg_rating DESC;

SELECT ns.*, s.points AS successful_bidding_points
FROM (SELECT b.bidder, b.points, p.* FROM bid b
      INNER JOIN post p ON (b.post = p.post_id)
      LEFT JOIN loan l ON (b.bidder = l.bidder AND b.post = l.post)
      WHERE loan_id IS NULL) AS ns
INNER JOIN (SELECT b.bidder,b.points, b.post FROM bid b
            INNER JOIN loan l ON (b.bidder = l.bidder AND b.post = l.post)) AS s
ON ns.post_id = s.post
WHERE ns.bidder = 68;

UPDATE bid
SET points = 200
WHERE bidder = 68 AND post = 7;

UPDATE users
SET points = points-200
WHERE userid = 68;

UPDATE post
SET availability = 'false'
WHERE post_id = 68;

DELETE FROM comment
WHERE comment_id = 7;

DELETE FROM bid
WHERE bidder = 68
AND post = 7;










