<?php

    include "conection.php";

    $username = $_COOKIE['username'];
    $extra = "";
    //echo("SELECT * FROM info WHERE username=\"" . $username . "\" AND pass=\"" . $password . "\";");
    $result = $mysqli->query("SELECT * FROM pooja_info WHERE username=\"" . $username .  "\";");

    if($result->num_rows>0){
         while($row = $result->fetch_assoc()){
   
       $name = $row["name"];
       $gender = $row["gender"];
       $about = $row["about"];
       $dob = $row["dob"];
       $phone = $row["phone"];
       $email = $row["email"];
       $pass = $row["pass"];
       $image= $row["image"];
    }
}
if($about==""||$dob==""||$about==NULL||$dob==NULL){
       $extra = "Please complete your profile before starting the chat!!";
   
}
    
?>
   
<html>
<head>
<title>Online Users</title>
<style>
    input{
        width:70%;
    }
</style>
<link rel="stylesheet" href="style.css">
</head>
<body style="font-size: medium;">
    <div class="seperate">
    <div class="login_tab">
        <div class="page2" style="width:90%">
            <button class="profileUpdate"><a href="profile.php" >Profile</a></button>
            <button class="profileUpdate"><a href="page2.php" >Users</a></button>
            <button type="button" class="profileUpdate"><a href="logout.php">Logout</a></button>
            <?php echo($extra); ?>
            <form class="form" action="updateProf.php" method="POST">
                <div class="login_tabs">
                    <div class="hide">
                        Name:<br>
                        <input id="name" class="inputs" onkeyup="validateName()" type="text" name="name" value="<?php
                        echo ($name);
                        ?>">
                        <label id="namePrompt" class="labels"></label>
                    </div>
                    <div class="hide">
                        Username:<br>
                        <input id="use" class="inputs" onkeyup="validateUse1()" type="text" name="use" value="<?php
                        echo ($username);
                        ?>" >
                        <label id="usePrompt" class="labels"></label>
                        <label id="unameCheck" class="labels"></label>
                    </div>
                    <div class="hide">
                        E-mail:<br>
                        <input id="Email" class="inputs" onkeyup="validateEmail()" type="text" name="email" value="<?php
                        echo ($email);
                        ?>">
                        <label id="emailPrompt" class="labels"></label>
                    </div>
                    <div>
                        New Password:<br>
                        <input id="Password" type="password" onkeyup="validatePass1()" class="inputs" name="pass" >
                        <label id="passPrompt" class="labels"></label>
                    </div>
                    <div class="hide">
                        Confirm-password:<br>
                        <input id="Confirm-password"type="password" onkeyup="validateCoPass()" class="inputs">
                        <label id="coPassPrompt"></label>
                    </div>
                    <div class="hide"> 
                        <label for="Gender">Gender:</label><br>
                        <input list="browsers" id="gen" name="gender" onkeyup="validateGen()" value="<?php
                        echo ($gender);
                        ?>"><label id="genPrompt"></label>
                        <datalist id="browsers">
                            <option value="Male">
                            <option value="Female">
                            <option value="Other">
                        </datalist>
                    </div>
                    <div class="hide">
                        Phone No.:<br>
                        <input id="phnNo" type="text" onkeyup="validatePhnNo()" class="inputs" name="phoneNo" value="<?php
                        echo ($phone);
                        ?>">
                        <label id="phnNoPrompt"></label>
                    </div>
                    <div class="hide">
                        Date of Birth:<br>
                        <input id="dob" type="date"  onkeyup="validatedob()" class="inputs" name="dob" value="<?php
                        echo ($dob);
                        ?>">
                        <label id="dobPrompt"></label>
                    </div>
                    <div class="hide">
                        About:<br>
                        <input id="abt" type="text" onkeyup="validateAbt()" class="inputs" name="about" value="<?php
                        echo ($about);
                        ?>">
                        <label id="abtPrompt"></label>
                    </div>
                    <br>Add new password only when you want to change it, otherwise leave the field blank.
                    <div>
                        <!-- <button type="submit" >Submit</button> -->
                       <br>
                        <button type="submit" class="button bsin" id="actual" style="display: none;"></button><br>
                        <button type="button" class="button bsin" id="bsin" onclick="validate2()">Update Profile</button>
                    </div>
                    
                </div>
                
                
            </form>
        </div>
    </div>
    <div class="login_tab">
        <div class="login_tabs">
            <div class="hide">
                Add a profile picture:<br><br>
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    Select image to upload:<br>
                    <input type="file" name="fileToUpload" id="fileToUpload" name="image"><br><br>
                    <input type="submit" value="Upload Image" name="submit">
                    </form>
                    <div  >
                    <img name="image" style="border:2px solid black;  width:200px ; height:200px" src="<?php
                        echo ($image);
                        ?>">
                    </div>
                   
                
            </div>
        </div>
    </div>
    </div>
    <script src="info1.js"></script>
</body>
</html>