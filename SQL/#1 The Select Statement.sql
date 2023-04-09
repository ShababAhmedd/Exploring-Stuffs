
/*
SQL is not a case sensitive language.
As a best practice, we should capitalise SQL keywords and use local case characters for anything else.
Using " ; " (semicolon) we need to terminate each statement.
*/
USE sql_store;		# This command selects the database in which all our queries will now be applied.

# --------------------------------------------------------------------------------------------------------------------------------------------

SELECT * 	# " * " (star) means all.
FROM customers;		# Customers is the name of the table.
# So, this command will basically print all the columns of the table along with their data.

# --------------------------------------------------------------------------------------------------------------------------------------------

SELECT * 
FROM customers
-- WHERE customer_id = 1;	# This new clause implies to print only that specific row where the customer_id is 1.
ORDER BY first_name;	# " ORDER BY " this command basically sorts. According to this scenario, all the customers are basically sorted based on their first name. 
