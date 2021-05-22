<?php

    include "conection.php";

    $username = "";
    $pass = "";
    $remember = "";
    print_r($_COOKIE['username']);
    if($_COOKIE['remember']==1 && $_COOKIE['username']!=""){
        $username = $_COOKIE['username'];
        $pass = $_COOKIE['password'];
        $remember = "checked";

        $res1 = $mysqli->query("UPDATE pooja_info SET logInfo = \"1\" WHERE username=\"" . $username . "\";");
    }





?>

<html>
<head>
<title>Login Page</title>
<link rel="stylesheet" href="style.css">
</head>
<body style="font-size: smaller;">
    <div class="seperate">
    <div class="login_tab">
    <form class="form" action="login.php" method="POST">
        <div class="head">
            <button type="button"  class="login headc " id="login">Login</button>
            <button class="signin1 signin headc" id="signin"><a href="signup.html" >SignUp</a></button>
        </div>
        <div class="login_tabs">
            <div class="hide">
                Username:<br>
                <input id="use" class="inputs" onkeyup="validateUse()" type="text" name="use" value="<?php echo($username)?>" >
                <label id="usePrompt" class="labels"></label>
            </div>
            <div>
                Password:<br>
                <input id="Password" type="password" onkeyup="validatePass1()" class="inputs" name="pass" value="<?php echo($pass)?>">
                <label id="passPrompt" class="labels"></label>
            </div>
            <div >
                <input id="remember_me" type="checkbox"  class="inputs" style="height: 15px; width: 15px;" name="remme" <?php echo($remember)?>>
                Remember me<br>
              
            </div>
            <label id="checkUser" class="labels"></label>
        </div>
        <!-- <button type="submit" class="button blin" id="blin" onclick="validate1()">Login</button><br> -->
        <button type="submit" class="button blin" id="actual" style="display: none;"></button>
        <button type="button" class="button blin" id="actual1" style="display: none;" onclick="checkData()"></button>
        <button type="button" class="button blin" id="blin" onclick="validate1()">Login</button>
    </form>
    <script src="login.js"></script>
    
        
    
</body>
</html>