# php_DBEngin
Php_DBEngin a simplest way to access database in core php.
Php_DBEngin has 4 simple function to access the database 
1. fetch_data($query)   
2. insert_data($query)
3. update_data($query)    
4. delete_data($query)

above all function has a string type argument, this argument should be a database query.

1. fetch_data($query) return a php associative array of result rows.

2. insert_data($query) return a array whit 2 element status (success / fail) and msg(last inserted id / query error).

3. update_data($query) return a array whit 2 element status (success / fail) and msg(number of updated rows / query error).

4. delete_data($query) return a array whit 2 element status (success / fail) and msg(number of deleted rows / query error).


## How to use
stap 1 : Download and put Php_DBEngin folder in your html project folder.

stap 2 : Now change the value of $servername, $username, $password, $database in php_DBEngin -> engin.php file.

stap 3 : In your index.php( or the file where you want to use database ) file include engin.php file.

stap 4 : done! just use the function in your file.


## sample code
<?php
   include 'php_DBEngin/engin.php';

   print_r(fetch_data("SELECT * from admins "));

   print_r(insert_data("INSERT INTO feelastdate(last_date) VALUES ('2019-02-2')"));

   print_r(update_data("UPDATE feelastdate set last_date = '1970-02-28' where id = '1' "));

   print_r(delete_data("DELETE from feelastdate where id= '2'"));
?>
	
   

