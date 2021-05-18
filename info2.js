function validate1(){
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
    function validatePass1(){
        var edu = document.getElementById("Password").value;
        if(edu.length==0){
            producePrompt("Password is required!!" , "passPrompt" , "red");
            return false;
        }
        else{
            nowOk("passPrompt");
            return true;      
        }
    }

    if(validatePass1()&&validateUse()){

    }
    else{
        alert("All fields not filled");
    }
}