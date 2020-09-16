<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
   margin-left:auto; 
    margin-right:auto;
}
</style>
</head>
<body>
<?php
include_once 'db.php';

$info="select * from feedback";
$res = mysqli_query($conn,$info) or die("error".mysqli_error($conn));
$cnt= mysqli_num_rows($res);
$result =array();

if($cnt>0){
	 echo "<table><tr><th>First_name</th><th>Last_name</th><th>Address</th><th>Email</th><th>Contac_no</th><th>Comment</th></tr>";
	while($r = mysqli_fetch_array($res)){
		extract($r);
  $fname=$r['0'];
 	$lname=$r['1'];
  $address=$r['2'];
	$email=$r['3'];
  $contact=$r['4'];
  $comment=$r['5'];
	// $email=$r['3'];
	echo "<tr><td>".$r["0"]."</td><td>".$r["1"]."</td><td> ".$r["2"]."</td><td>".$r["3"]."</td><td>".$r["4"]."</td><td>".$r["5"]."</td></tr>";
    }
    echo "</table>";

}
else {
    echo"Error...";
}

?>
</body>
</html>