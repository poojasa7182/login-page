<?php



?>
<html>
<head>
<title>Online Users</title>
<link rel="stylesheet" href="style.css">
</head>
<body style="font-size: smaller; display:flex;">
    <div class="seperate">
    <div class="login_tab">
        <div class="page2">
            <button class="profileUpdate"><a href="profile.php" >Update Profile</a></button>
            <button class="profileUpdate"><a href="page2.html" >Users</a></button>
        </div>
        
        <div class="login_tabs">
            <div class="hide">
                Name:<br>
                <input id="name" class="inputs" onkeyup="validateName()" type="text" name="name" >
                <label id="namePrompt" class="labels"></label>
            </div>
            <div class="hide">
                Username:<br>
                <input id="use" class="inputs" onkeyup="validateUse()" type="text" name="use" >
                <label id="usePrompt" class="labels"></label>
            </div>
            <div class="hide">
                E-mail:<br>
                <input id="Email" class="inputs" onkeyup="validateEmail()" type="text" name="email">
                <label id="emailPrompt" class="labels"></label>
            </div>
            <div>
                Password:<br>
                <input id="Password" type="password" onkeyup="validatePass()" class="inputs" name="pass" >
                <label id="passPrompt" class="labels"></label>
            </div>
            <div class="hide">
                Confirm-password:<br>
                <input id="Confirm-password"type="text" onkeyup="validateCoPass()" class="inputs">
                <label id="coPassPrompt"></label>
            </div>
            <div class="hide"> 
                <label for="Gender">Gender:</label><br>
                <input list="browsers" id="gen" name="gender" onkeyup="validateGen()"><label id="genPrompt"></label>
                <datalist id="browsers">
                    <option value="Male">
                    <option value="Female">
                    <option value="Other">
                </datalist>
            </div>
            <div class="hide">
                Phone No.:<br>
                <input id="phnNo" type="text" onkeyup="validatePhnNo()" class="inputs" name="phoneNo">
                <label id="phnNoPrompt"></label>
            </div>
</div>
    </div>
    </div>
</body>
</html>