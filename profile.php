<?php
    include "conection.php";

    $username = $_COOKIE["username"];
    $name = $mysqli->query("SELECT `name` FROM info WHERE username=\"" . $username .  "\";");
    $uname = $mysqli->query("SELECT username FROM info WHERE username=\"" . $username .  "\";");
    $email = $mysqli->query("SELECT email FROM info WHERE username=\"" . $username .  "\";");
    $gender = $mysqli->query("SELECT gender FROM info WHERE username=\"" . $username .  "\";");
    $phone = $mysqli->query("SELECT phone FROM info WHERE username=\"" . $username .  "\";");
    $dob = $mysqli->query("SELECT dob FROM info WHERE username=\"" . $username .  "\";");
    $about = $mysqli->query("SELECT about FROM info WHERE username=\"" . $username .  "\";");
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
            <button  type="button"  class="profileUpdate"><a href="page2.html" >Users</a></button>
            <button type="button" class="profileUpdate"><a href="updateProfile.php">Update Profile</a></button>
            <button type="button" class="profileUpdate"><a href="logout.php">Logout</a></button>
        </div>
        <br>
        <div class="login_tabs" style="margin-left:2%;">
            <div class="hide">
                Name:
                <span class="profilepage" >
                <?php 
                    while($row = $name->fetch_assoc()){
                        printf(
                            $row['name'],
                        );
        
                    } ?>
                </span>
            </div>
            <div class="hide">
                Username:
                <span class="profilepage" >
                <?php 
                    while($row = $uname->fetch_assoc()){
                        printf(
                            $row['username'],
                        );
        
                    } ?>
                </span>
            </div>
            <div class="hide">
                E-mail:
                <span class="profilepage" >
                <?php 
                    while($row = $email->fetch_assoc()){
                        printf(
                            $row['email'],
                        );
        
                    } ?>
                </span>
            </div>
            <div class="hide">
                Gender:
                <span class="profilepage" >
                <?php 
                    while($row = $gender->fetch_assoc()){
                        printf(
                            $row['gender'],
                        );
        
                    } ?>
                </span>
            </div>
            <div class="hide">
                Date of birth:
                <span class="profilepage" >
                <?php 
                    while($row = $dob->fetch_assoc()){
                        printf(
                            $row['dob'],
                        );
        
                    } ?>
                </span>
            </div>
            <div class="hide">
                Phone No.:
                <span class="profilepage" >
                <?php 
                    while($row = $phone->fetch_assoc()){
                        printf(
                            $row['phone'],
                        );
        
                    } ?>
                </span>
            </div>
            <div class="hide">
                About:
                <span class="profilepage" >
                <?php 
                    while($row = $about->fetch_assoc()){
                        printf(
                            $row['about'],
                        );
        
                    } ?>
                </span>
            </div>
            
</div>
    </div>
    </div>
</body>
</html>