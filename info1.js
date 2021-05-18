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
//name
function validateName(){
    var nameE = document.getElementById("name").value;
    var name = nameE.trim();
    if(name.length==0){
        producePrompt("Name is required!!" , "namePrompt" , "red");
        return false;
    }
    if(!name.match(/^[a-zA-Z\s']+$/)){
        producePrompt("Invalid Name!!" , "namePrompt" , "red");
        return false;
    }
    else{
        nowOk("namePrompt");
        return true;
    }   
}
//E-mail
function validateEmail(){
    var emailE = document.getElementById("Email").value;
    var email = emailE.trim();
    if(email.length==0){
        producePrompt("Email is required!!" , "emailPrompt" , "red");
        return false;
    }
    if(!email.match(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+\.([a-zA-Z0-9-.]+)[a-zA-Z]$/)){
        producePrompt("Invalid Email!!" , "emailPrompt" , "red");
        return false;
    }
    else{
        nowOk("emailPrompt");
        return true;
    }   

}
//Password
function validatePass(){
    var passE = document.getElementById("Password").value;
    var pass = passE.trim();
    if(pass.match(/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/)){
        producePrompt("Strong Password" , "passPrompt" , "green");
        return true;
    }
    if(pass.length<=5){
        producePrompt("Password must contain atleast 6 characters" , "passPrompt" , "red");
        return false;
    }
    // if(!pass.match(/^(((?=.*[a-z])(?=.*[A-Z]))|((?=.*[a-z])(?=.*[0-9]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[A-Z])(?=.*[!@#\$%\^&\*]))|((?=.*[a-z])(?=.*[!@#\$%\^&\*]))|((?=.*[a-z])(?=.*[A-Z])(?=.*[!@#\$%\^&\*]))|((?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])))(?=.{,5})/)){
    //     producePrompt("Password must contain atleast 6 characters" , "passPrompt" , "red");
    //     return false;
    // }
    // if(!pass.match(/^(((?=.*[!@#\$%\^&\*])(?=.*[0-9]))|((?=.*[A-Z])(?=.*[!@#\$%\^&\*])(?=.*[0-9]))|((?=.*[a-z])(?=.*[!@#\$%\^&\*])(?=.*[0-9])))(?=.{,5})/)){
    //     producePrompt("Password must contain atleast 6 characters" , "passPrompt" , "red");
    //     return false;
    // }
    if(pass.match(/^(((?=.*[a-z])(?=.*[A-Z]))|((?=.*[a-z])(?=.*[0-9]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[A-Z])(?=.*[!@#\$%\^&\*]))|((?=.*[a-z])(?=.*[!@#\$%\^&\*]))|((?=.*[a-z])(?=.*[A-Z])(?=.*[!@#\$%\^&\*]))|((?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])))(?=.{6,})/)){
        producePrompt("Weak Password" , "passPrompt" , "red");
        return true;
    }
    if(pass.match(/^((?=.*[a-z])|(?=.*[A-Z])|(?=.*[0-9])|(?=.*[!@#\$%\^&\*])|((?=.*[!@#\$%\^&\*])(?=.*[0-9]))|((?=.*[A-Z])(?=.*[!@#\$%\^&\*])(?=.*[0-9]))|((?=.*[a-z])(?=.*[!@#\$%\^&\*])(?=.*[0-9])))(?=.{6,})/)){
        producePrompt("Weak Password" , "passPrompt" , "red");
        return true;
    }
}
//ConfirmPassword
function validateCoPass(){
    var copass = document.getElementById("Confirm-password").value;
    var pass = document.getElementById("Password").value;
    if(copass!=pass){
        producePrompt("Password doesnt match" , "coPassPrompt" , "red");
        return false;
    }
    else{
        nowOk("coPassPrompt");
        return true; 
    }
}
//Age
function validateAge(){
    var ageE = document.getElementById("Age").value;
    var age = ageE.trim();
    if(age.length==0){
        producePrompt("Age is required!!" , "agePrompt" , "red");
        return false;
    }
    if(!age.match(/^[0-9]+$/)){
        producePrompt("Invalid format" , "agePrompt" , "red");
        return false;
    }
    else{
        if(age<18){
            producePrompt("Minimum age required is 18" , "agePrompt" , "red");
            return false;
        }
        else{
            nowOk("agePrompt");
            return true;  
    
        }
    }
}
//PhoneNo.
function validatePhnNo(){
    var phnE = document.getElementById("phnNo").value;
    var phn = phnE.trim();
    if(phn.length==0){
        producePrompt("Phone number is required!!" , "phnNoPrompt" , "red");
        return false;
    }
    if(!phn.match(/^(((\+91)?\s?(-)?\s?)|(0?)|((91)?\s?(-)?\s?))[6789][0-9]{9}$/)){
        producePrompt("Invalid format" , "phnNoPrompt" , "red");
        return false;
    }
    else{
        nowOk("phnNoPrompt");
        return true;      
    }
}

//gender
function validateGen(){
    var edu = document.getElementById("gen").value;
    if(edu.length==0){
        producePrompt("Gender is required!!" , "genPrompt" , "red");
        return false;
    }
    else{
        nowOk("genPrompt");
        return true;      
    }
}



function validate1(){
    alert("All fields not filled");
    if(validatePass()){

    }
    else{
        alert("All fields not filled");
    }
}
//validate all
function validate(){
    if(validateUse()&&validateGen()&&validatePhnNo()&&validateAge()&&validateCoPass()&&validatePass()&&validateEmail()&&validateName()){

    }
    else{
        alert("All fields not filled");
    }
}