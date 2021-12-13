var xmlHttp;
function proveri(str)
{
    xmlHttp=GetXmlHttpObject();
    if (xmlHttp==null){
        alert ("Browser does not support HTTP Request");
        return; 
    }
 
    var url="provera.php";
    url=url+"?form-email="+str;
    url=url+"&sid="+Math.random();
    
    xmlHttp.onreadystatechange=stateChanged ;
    xmlHttp.open("GET",url,true);
    xmlHttp.send(null);

}
function stateChanged(){ 

    if (xmlHttp.readyState==4){
        
        if (xmlHttp.responseText=="0"){
            document.getElementById("user").innerHTML="Email koji ste uneli već postoji u bazi";
            document.getElementById("form-email").focus();
        } else {
                    document.getElementById("user").innerHTML="Email je dobar";
        }

    }
    }
    function GetXmlHttpObject(){
    var xmlHttp=null;
    try {
    // Firefox, Opera 8.0+, Safari
    xmlHttp=new XMLHttpRequest();
    } catch (e) {
    //Internet Explorer
    try {
    
    xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) {
    xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
 }

return xmlHttp;
}
