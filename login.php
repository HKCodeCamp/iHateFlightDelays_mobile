<?php
    $username = $_POST[username];
    $password = $_POST[password];    
    
$item = array();
$item['username'] = $username;
$item['status'] = 'success';

//echo '{"item":'. json_encode($item) .'}'; 

echo '{json_encode($item)}'; 
	
?>