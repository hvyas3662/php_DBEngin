	<?php 
	include 'php_DBEngine/engine.php';

	print_r(fetch_data("SELECT * from admins "));
	echo "<br>";
	print_r(insert_data("INSERT INTO feelastdate(last_date) VALUES ('2019-02-2')"));
	echo "<br>";
	print_r(update_data("UPDATE feelastdate set last_date = '1970-02-28' where id = '1' "));
	echo "<br>";
	print_r(delete_data("DELETE from feelastdate where id= '2'"));


	?>
