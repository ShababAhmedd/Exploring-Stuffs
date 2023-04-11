SELECT 
	last_name, 
	first_name, 
    points, 
    points*10+100 AS "discount factor"		# +, -, *, /, % all these arithmetic operations can be done. 		
FROM customers;		

#=======================================================================================================================================

SELECT DISTINCT state		# This particular query " Distinct state " will only retrieve the unique list of states on the customers table.
FROM customers;				# I.e. with this keyword, we can remove duplicates.    

#=======================================================================================================================================

/* 
In line number 5 alias is used which basically dictates what the name of the column should be. Otherwise, the expression would
 be named as the column itself.
 
 If we want to have spaces between words in alias, then we need to write them between colons.
 
 Instead of asteriks(*) here we specifically specified the columns that we want to return.
 
*/