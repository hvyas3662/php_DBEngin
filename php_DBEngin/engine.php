<?php 
$servername = "localhost";
$username = "root";
$password = "******";
$database = "db_name";

function fetch_data($query){
	global $servername, $username, $password, $database;
	$con = mysqli_connect($servername, $username, $password, $database);
	if (mysqli_connect_error()) { return "Could not connected.";} 
	$result=mysqli_query($con,$query);
	$result_array=mysqli_fetch_all($result,MYSQLI_ASSOC);
	mysqli_close($con);
	return $result_array;

}



function insert_data($query){
	global $servername, $username, $password, $database;
	$con = mysqli_connect($servername, $username, $password, $database);
	if (mysqli_connect_error()) { return "Could not connected.";} 
	$result=mysqli_query($con,$query);
	$insert_id= mysqli_insert_id($con);
	mysqli_close($con);
	if($result){
		return array('status' => 'success', 'msg' => $insert_id);
	}else{
		return array('status' => 'fail', 'msg' => 'query error');
	}

}

function update_data($query){
	global $servername, $username, $password, $database;
	$con = mysqli_connect($servername, $username, $password, $database);
	if (mysqli_connect_error()) { return "Could not connected.";} 
	$result=mysqli_query($con,$query);
	$affected_rows=mysqli_affected_rows($con);
	mysqli_close($con);
	if($result){
		return array('status' => 'success', 'msg' => $affected_rows);
	}else{
		return array('status' => 'fail', 'msg' => 'query error');
	}


}

function delete_data($query){
	global $servername, $username, $password, $database;
	$con = mysqli_connect($servername, $username, $password, $database);
	if (mysqli_connect_error()) { return "Could not connected.";} 
	$result=mysqli_query($con,$query);
	$affected_rows=mysqli_affected_rows($con);
	mysqli_close($con);
	if($result){
		return array('status' => 'success', 'msg' => $affected_rows);
	}else{
		return array('status' => 'fail', 'msg' => 'query error');
	}

}

?>
