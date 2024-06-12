<?php
include 'conn.php';
$id = $_POST['id'];
$name = $_POST['name'];
$msg = $_POST['msg'];
$topic = $_POST['topic'];

if($name != "" && $msg != ""){
	$sql = $conn->query("INSERT INTO discussion (parent_comment, student, post, topic_name)
			VALUES ('$id', '$name', '$msg', '$topic')");
	echo json_encode(array("statusCode"=>200));
}
else{
	echo json_encode(array("statusCode"=>201));
}
$conn = null;

?>