<?php
    $username = $_POST[username];
    $password = $_POST[password];    
    $password1 = $_POST[password1]; 
    $email = $_POST[email]; 		
    
$item = array();
$item['username'] = $username;
$item['password'] = $password;
$item['email'] = $email;
$item['status'] = 'success';

echo '{"item":'. json_encode($item) .'}'; 

// echo json_encode($item); 
	
?>