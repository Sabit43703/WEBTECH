<?php
$json_data = file_get_contents('user.json');

$data = json_decode($json_data, true);

$valid_username=$_POST['username'];
$valid_password=$_POST['password'];

$valid_user = false;

for ($i = 0; $i < 50; $i++) {


    if($data[$i]['username'] == $valid_username && $data[$i]['password'] == $valid_password) {
        $valid_user = true;
    }
}

if($valid_user) {
    
    echo "Welcome";
    header('Location: dashboard.php');
} else {
    echo "Wrong Username or password";
}
?>