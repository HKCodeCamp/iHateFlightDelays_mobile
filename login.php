<?php
    $username = $_POST[username];
    $password = $_POST[password];    
    
$item = array();
$item['username'] = $username;
$item['status'] = 'success';

echo json_encode($item);	
	
?>