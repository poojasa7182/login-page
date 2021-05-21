window.onload=(function(){
    refresh1();
    refresh();
})

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

                    let childDiv1 = document.createElement("div");
                    var a = siteData_data[i].Username;
                    childDiv1.innerHTML= "<button id="+a+"onclick = \"openChat()\">"+siteData_data[i].Username+"("+siteData_data[i].Name+")"+"</button>";
                    childDiv1.className="content1";
                    childDiv1.id=a;
    
                    document.getElementById("id2").appendChild(childDiv1);
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
        ajaxObject.open("GET" ,"http://localhost/prac/prog/refresh1.php" , true );
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

                let childDiv1 = document.createElement("div");
                var a = siteData_data[i].Username;
                childDiv1.innerHTML= "<button id="+a+"onclick = \"openChat()\">"+siteData_data[i].Username+"("+siteData_data[i].Name+")"+"</button>";
                childDiv1.className="content1";
                childDiv1.id=a;
                document.getElementById("id1").appendChild(childDiv1);
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
        ajaxObject.open("GET" ,"http://localhost/prac/prog/refresh.php" , true );
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

                let childDiv1 = document.createElement("div");
                var a = siteData_data[i].Username;
                childDiv1.innerHTML= "<button id="+a+"onclick = \"openChat()\">"+siteData_data[i].Username+"("+siteData_data[i].Name+")"+"</button>";
                childDiv1.className="content1";
                childDiv1.id=a;
                document.getElementById("id").appendChild(childDiv1);
            }

            
        }
        if(ajaxObject.readyState==4 && ajaxObject.status!=200){
            alert("Error")
        }
        
    };
}