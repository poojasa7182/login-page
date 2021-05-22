window.onload=(function(){
    refresh1();
    refresh();
})



function openChat(a,b){
    var c = a.id;
    console.log(c);
    document.cookie = "seconduser="+c;
    //alert(document.cookie);
    document.getElementById("actual1").click();
}
function find(){
    document.getElementById("id2").innerHTML="";
    var uname = document.getElementById("searchbox").value;
    
    var user = uname;
    console.log(uname);
    
    if(uname!=""){
        //console.log("jijd");
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange= function(){
            if(this.readyState==4 && this.status==200){
                console.log(this.responseText);

                var siteData = JSON.parse(xhr.responseText);
            
                var siteData_data = siteData.data;

                for(let i =  0 ; i < (siteData_data).length-1 ; i++){
                    let mainDiv = document.createElement("div");

                    let childDiv1 = document.createElement("div");
                    let childDiv2 = document.createElement("div");
                    var a = siteData_data[i].Username;
                    childDiv1.innerHTML= "<button class=\"buttons\" id="+a+"onclick = \"openChat("+a+")\">"+siteData_data[i].Username+"("+siteData_data[i].Name+")"+"</button>";
                    childDiv1.className="content1";
                    childDiv2.className="content2";
                    mainDiv.className="content";
                    childDiv1.id=a;
                    childDiv2.innerHTML= "<img class=\"icon\" style=\"max-width:100%; height:auto\"src=\""+siteData_data[i].image+"\">";
                    mainDiv.appendChild(childDiv1);
                    mainDiv.appendChild(childDiv2);
                    document.getElementById("id2").appendChild(mainDiv);
                    
                   
                }
               
                
            }
        }
        
        xhr.open("GET", "search.php?use="+user,true);
        xhr.send();
        xhr.onerror = function(){
            alert("error in xhr request");
        }
        //console.log(bool);
    }
}

function refresh1(){
    document.getElementById("id1").innerHTML="";
    var ajaxObject = null;

    if(window.XMLHttpRequest){
        ajaxObject = new XMLHttpRequest();
    }
    else{
        if(window.ActiveXObject){
            ajaxObject = new ActiveXObject("Microsoft.XMLHTTP")
        }
    }

    if(ajaxObject != null){
        ajaxObject.open("GET" ,"refresh1.php" , true );
        ajaxObject.send();
    }
    else{
        alert("You donot have a compatible browser.")
    }
    ajaxObject.onreadystatechange = function(){
        if(ajaxObject.readyState==4 && ajaxObject.status==200){
            //console.log(this.responseText);
            var siteData = JSON.parse(ajaxObject.responseText);
            //console.log(siteData);
            
            var siteData_data = siteData.data;
            //console.log(siteData_data);

            for(let i =  0 ; i < (siteData_data).length-1 ; i++){
                let mainDiv = document.createElement("div");

                let childDiv1 = document.createElement("div");
                let childDiv2 = document.createElement("div");
                var a = siteData_data[i].Username;
                childDiv1.innerHTML= siteData_data[i].Username+"("+siteData_data[i].Name+")";
                childDiv1.className="content1";
                childDiv2.className="content2";
                mainDiv.className="content";
                //childDiv1.id=a;
                childDiv2.innerHTML= "<img class=\"icons\" style=\"max-width:100%; height:auto\"src=\""+siteData_data[i].image+"\">";
                mainDiv.appendChild(childDiv1);
                mainDiv.appendChild(childDiv2);
                document.getElementById("id1").appendChild(mainDiv);
            }

            
        }
        if(ajaxObject.readyState==4 && ajaxObject.status!=200){
            alert("Error")
        }
        
    };

}


function refresh(){
    document.getElementById("id").innerHTML="";
    var ajaxObject = null;

    if(window.XMLHttpRequest){
        ajaxObject = new XMLHttpRequest();
    }
    else{
        if(window.ActiveXObject){
            ajaxObject = new ActiveXObject("Microsoft.XMLHTTP")
        }
    }

    if(ajaxObject != null){
        ajaxObject.open("GET" ,"refresh.php" , true );
        ajaxObject.send();
    }
    else{
        alert("You donot have a compatible browser.")
    }
    ajaxObject.onreadystatechange = function(){
        if(ajaxObject.readyState==4 && ajaxObject.status==200){
            //console.log(this.responseText);
            var siteData = JSON.parse(ajaxObject.responseText);
            //console.log(siteData);
            
            var siteData_data = siteData.data;
            //console.log(siteData_data);

            for(let i =  0 ; i < (siteData_data).length-1 ; i++){
                let mainDiv = document.createElement("div");

                let childDiv1 = document.createElement("div");
                let childDiv2 = document.createElement("div");
                var a = siteData_data[i].Username;
                childDiv1.innerHTML= siteData_data[i].Username+"("+siteData_data[i].Name+")";
                childDiv1.className="content1";
                childDiv2.className="content2";
                mainDiv.className="content";
                //childDiv1.id=a;
                childDiv2.innerHTML= "<img class=\"icons\" style=\"max-width:100%; height:auto\"src=\""+siteData_data[i].image+"\">";
                mainDiv.appendChild(childDiv1);
                mainDiv.appendChild(childDiv2);
                document.getElementById("id").appendChild(mainDiv);
            }

            
        }
        if(ajaxObject.readyState==4 && ajaxObject.status!=200){
            alert("Error")
        }
        
    };
}