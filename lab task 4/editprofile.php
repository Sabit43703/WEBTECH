<html>
    <head>
        <title>

        </title>
    </head>
    <body>
        
    <p>
     <st  style="height:100px; width:100px; padding-left:50px;">
         <nav style="float:right;padding:15px;">
             <ul>
                 <li style="display:  10px;"><a href="public_Home.php">Home</a></li>
                 <li style="display:  10px;"><a href="Login.php">Login</a></li>
                 <li style="display:  10px;"><a href="Registration.php">Registration</a></li>
             </ul>
         </nav>  
     </div>
     <div style=" width:20%;height:500px;float:left;">
             <p><h2>Accounts</h2></p><hr>
                
             <ul>
             <li style="display:  10px;"><a href="dashboard.php">Dashboard</a></li><br><br><br>
                 <li style="display:  10px;"><a href="view_profile.php">View Profile</a></li><br><br><br>
                 <li style="display:  10px;"><a href="registration.php">Edit Profile</a></li><br><br><br>
                 <li style="display:  10px;"><a href="Change_profile.php">Change Profile Picture</a></li><br><br><br>
                 <li style="display:  10px;"><a href="Change_pass.php">Change Password</a></li><br><br>
                 <li style="display: 10px;"><a href="logout.php">Logout</a></li><br><br>  
             </ul>
         
     </div>
     <div style=" width:99%;height:500px;text-align:center; ">
            <fieldset style="display:250px;height:400px;margin-top:25px;margin-bottom:3px;">
            <nav ;><u><h1>Edit Profile</h1></u>

                    <form action="validation.php" method="POST">
                            <label for="username">Name:</label>
                            <input type="text" name="name" id="name" >
                            <hr>
                            <br>
                            <label for="email">Email:</label>
                            <input type="text" name="email" id="email" >
                            <hr>
                            <br>
                  
                            <div>
                                <legend>Gender:</legend>
                                
                                    <input type="radio" name="gender" value="Male" /> Male
                                    <input type="radio" name="gender" value="Female" /> Female
                                    <input type="radio" name="gender" value="Other" /> Other  
                                <br>  
                                <hr>
                            </div><br>
                            <div>
                                <legend>Date of Birth:</legend>
                                    <input type="date" name="dateOfBirth" placeholder="Enter your Date of Birth" /> 
                                <br> <br>
                            </div><br><hr>
                            <input type="submit" name="submit" value="Submit" />
                            

                            
                    </form>
                            </nav>
            </fieldset>
                            
            </div>
     
<?php include("footer.php")?>
    </body>
</html>