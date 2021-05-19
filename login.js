function producePrompt(message ,promptLocation,color){
    document.getElementById(promptLocation).innerHTML = message;
    document.getElementById(promptLocation).style.color = color;
}
function nowOk(promptLocation){
    document.getElementById(promptLocation).innerHTML = "";
}

function validateUse(){

    var edu = document.getElementById("use").value;
    if(edu.length==0){
        producePrompt("Useranme is required!!" , "usePrompt" , "red");
        return false;
    }
    else{
        nowOk("usePrompt");
        return true;      
    }
}

function checkData(){
    console.log("hi");
    var uname = document.getElementById("use").value;
    var pass = document.getElementById("Password").value;
    data = {
        username : uname,
        password : pass
    };
    var user = uname;
    var pass1 = pass;
    var bool = false;
    if(uname!=""){
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange= function(){
            if(this.readyState==4 && this.status==200){
                console.log(this.responseText);
                if(this.responseText=="0"){
                    document.getElementById("checkUser").innerHTML="Invalid Username or Password!!";
                    document.getElementById("checkUser").style.color="red";
                    return false;
                }
                if(this.responseText=="1"){
                    bool = true;
                    console.log(bool);
                    document.getElementById("checkUser").innerHTML="OK";
                    document.getElementById("checkUser").style.color="green";
                    return true;
                }
            }
        }
        
        xhr.open("GET", "checkUserLogin.php?use="+user+"&pass="+pass1,true);
        xhr.send();
        xhr.onerror = function(){
            alert("error in xhr request");
        }
        //console.log(bool);
        if(document.getElementById("checkUser").innerHTML=="OK"){
            console.log("hemlo");
            return true;
        }
        else{
            return false;
        }
    }
    else{
        document.getElementById("checkUser").innerHTML="";
    }
}

function validatePass1(){
    var edu = document.getElementById("Password").value;
    if(edu.length==0){
        producePrompt("Password is required!!" , "passPrompt" , "red");
        return false;
    }
    else{
        nowOk("passPrompt");
        checkData();
        return true;      
    }
    
}

function validate1(){
    if(validatePass1()&&validateUse()){
            if(checkData()){
                console.log("hemlo");
                document.getElementById("actual").click();
            }
            else{
                alert("Invalid Username or Password!!");
            }
    }
    else{
        alert("All fields not filled");
    }
}