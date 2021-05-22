document.getElementsByClassName("list")[0].addEventListener("click",function(){
    document.getElementsByClassName("list-user")[0].classList.toggle("list-user-cl");
    document.getElementsByClassName("chat-body")[0].classList.toggle("chat-body1");
})

window.onload=(function(){
    chatIn();
    const theElement = document.getElementById('chat_body');

const scrollToBottom = (node) => {
	node.scrollTop = node.scrollHeight;
}

scrollToBottom(theElement); 
})

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
      var c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
  }

function send(){
    var mes = document.getElementById("messageInp").value;
    document.getElementById("messageInp").innerHTML="";
    console.log(mes);

    if(mes!=""){
        //console.log("jijd");
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange= function(){
            if(this.readyState==4 && this.status==200){
                
               return true;
                
            }
        }
        
        xhr.open("GET", "addmessage.php?message="+mes,true);
        xhr.send();
        xhr.onerror = function(){
            alert("error in xhr request");
        }
        //console.log(bool);
    }
}

function chatIn(){
    var xhr = new XMLHttpRequest();
        xhr.onreadystatechange= function(){
            if(this.readyState==4 && this.status==200){
                console.log(this.responseText);

                var siteData = JSON.parse(xhr.responseText);
            
                var siteData_data = siteData.data;

                for(let i =  0 ; i < (siteData_data).length-1 ; i++){

                    let childDiv1 = document.createElement("div");
                    childDiv1.innerHTML= siteData_data[i].message;
                    childDiv1.classList.add("message");
                    var secuser = getCookie("seconduser");
                    var a1 = "\" "+secuser+" \"";
                    var a2 = "\""+siteData_data[i].receiver+"\"";
                    
                    if(a1==a2){
                        childDiv1.classList.add("right");
                    }
                    else{
                        childDiv1.classList.add("left");
                    }
                    document.getElementById("chat_body").appendChild(childDiv1);
                    
                   
                }
               
                
            }
        }
        
        xhr.open("GET", "chatdata.php",true);
        xhr.send();
        xhr.onerror = function(){
            alert("error in xhr request");
        }
}