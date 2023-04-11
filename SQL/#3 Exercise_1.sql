/*
Write a SQL query to return all the products in the database.  
In the result set there should be three columns:
	1. Name
    2. Unit Price
    3. New Price (unit price * 1.1)
*/

SELECT
	name, 
    unit_price, 
    unit_price*1.1 AS "new price"
FROM products;

