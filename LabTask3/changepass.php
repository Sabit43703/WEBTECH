<html>
    <head>
      <u><b><h2>Change Password</h2></b></u>
    </head>
    <body>
            <form  method="post"  action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    Current password: <input type="text" name="oldpass" id="oldpass"><br><br>
                    New Password : <input type="text" name="newpass" id="newpass"><br><br>
                    Re-Type New password :<input type="text" name="newpassagain" id="newpassagain"><br><br> 
                    <input type="submit" value="Login" name="submit">
            </form>

            <?php
     $currentpass="farabi123";
     
    if($_SERVER['REQUEST_METHOD']=== 'POST'){
        $currentpass = $_POST['oldpass'];
        if(empty($currentpass) || $currentpass!="farabi123"){
            echo "current password is not currect";
        }
    }
?>
<?php
if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $newPassword = $_POST['newpass'];

    if(empty($newPassword) || strlen($newPassword)<8){
        echo "password must not empty and less then 8 char";
    }
    else if(!preg_match('/[@#$%]/',$newPassword)){
        echo "password must contain one spacial charecter";
    }
    else if($_POST['oldpass']=== $_POST['newpass']){
        echo "current password and new password cannot be same";
    }
   
}
if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $reTypePass= $_POST['newpassagain'];
    if (empty($reTypePass) || strlen ($reTypePass)<8){
        echo "password must have 8 charecter atleast";
    }
    else if(!($_POST['newpass']=== $_POST['newpassagain'])){
        echo "new pass and retype pass must be same";
    }
    else{
        echo "passsword changed";
    }
}
?>
    </body>
</html>