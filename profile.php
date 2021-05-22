<?php
    include "conection.php";

    $username = $_COOKIE["username"];
    $name = $mysqli->query("SELECT `name` FROM pooja_info WHERE username=\"" . $username .  "\";");
    $uname = $mysqli->query("SELECT username FROM pooja_info WHERE username=\"" . $username .  "\";");
    $email = $mysqli->query("SELECT email FROM pooja_info WHERE username=\"" . $username .  "\";");
    $gender = $mysqli->query("SELECT gender FROM pooja_info WHERE username=\"" . $username .  "\";");
    $phone = $mysqli->query("SELECT phone FROM pooja_info WHERE username=\"" . $username .  "\";");
    $dob = $mysqli->query("SELECT dob FROM pooja_info WHERE username=\"" . $username .  "\";");
    $about = $mysqli->query("SELECT about FROM pooja_info WHERE username=\"" . $username .  "\";");
    $image = $mysqli->query("SELECT `image` FROM pooja_info WHERE username=\"" . $username .  "\";");
    //print_r($result);
    

?>
<html>
<head>
<title>Online Users</title>
<link rel="stylesheet" href="style.css">
</head>
<body style="font-size: 20px; display:flex;">
    <div class="seperate">
    <div style="display:flex; flex-direction:column;"class="login_tab" >
        <div class="page2">
            <button  type="button" class="profileUpdate"><a href="profile.php" >Your Profile</a></button>
            <button  type="button"  class="profileUpdate"><a href="page2.php" >Users</a></button>
            <button type="button" class="profileUpdate"><a href="updateProfile.php">Update Profile</a></button>
            <button type="button" class="profileUpdate"><a href="logout.php">Logout</a></button>
        </div>
        <br>
        <div class="login_tabs" style="margin-left:2%;">
            <br>
            <br>
            <div class="hide">
                Name:
                <span class="profilepage" >
                <?php 
                    while($row = $name->fetch_assoc()){
                        print(
                            $row['name']
                        );
        
                    } ?>
                </span>
            </div>
            <br>
            <div class="hide">
                Username:
                <span class="profilepage" >
                <?php 
                    while($row = $uname->fetch_assoc()){
                        print(
                            $row['username']
                        );
        
                    } ?>
                </span>
            </div><br>
            <div class="hide">
                E-mail:
                <span class="profilepage" >
                <?php 
                    while($row = $email->fetch_assoc()){
                        print(
                            $row['email']
                        );
        
                    } ?>
                </span>
            </div><br>
            <div class="hide">
                Gender:
                <span class="profilepage" >
                <?php 
                    while($row = $gender->fetch_assoc()){
                        print(
                            $row['gender']
                        );
        
                    } ?>
                </span>
            </div><br>
            <div class="hide">
                Date of birth:
                <span class="profilepage" >
                <?php 
                    while($row = $dob->fetch_assoc()){
                        print(
                            $row['dob']
                        );
        
                    } ?>
                </span>
            </div><br>
            <div class="hide">
                Phone No.:
                <span class="profilepage" >
                <?php 
                    while($row = $phone->fetch_assoc()){
                        print(
                            $row['phone']
                        );
        
                    } ?>
                </span>
            </div><br>
            <div class="hide">
                About:
                <span class="profilepage" >
                <?php 
                    while($row = $about->fetch_assoc()){
                        print(
                            $row['about']
                        );
        
                    } ?>
                </span>
            </div>
            
</div>
    </div>
    <div class="login_tab">
        <div class="login_tabs">
            <div class="hide" style="margin:20%; ">
                Profile picture:<br><br>
                
                    <div  >
                    <img name="image" style="border:2px solid black; width:200px ; height:200px" src="<?php 
                    while($row = $image->fetch_assoc()){
                        print(
                            $row['image']
                        );
        
                    } ?>">
                    </div>
                   
                
            </div>
        </div>
    </div>
    </div>
</body>
</html>