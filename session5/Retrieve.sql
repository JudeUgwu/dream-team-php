--Retrieve customers Manually

-- only username of all users
SELECT username  FROM customers;

-- get all records
SELECT *  FROM customers;

-- select only email and username
SELECT email,username FROM customers;

-- using where clause
SELECT * FROM customers WHERE username = 'jude' OR username = 'max';
SELECT * FROM customers WHERE username IN('jude', 'max');

