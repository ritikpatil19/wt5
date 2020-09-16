<?php
	$conn = new mysqli("localhost","root","","wt");
	
	if ($conn->connect_error)
	{
			die("connection failed".$conn->connect_error);
	}
	

?>