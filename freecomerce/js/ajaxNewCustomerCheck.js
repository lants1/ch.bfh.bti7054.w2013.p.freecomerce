window.onload = function() {
document.getElementById("lastname").onblur = function() {
var xmlhttp;
var lastname=document.getElementById("lastname");
if (lastname.value != "")
{
if (window.XMLHttpRequest)
  {
  xmlhttp=new XMLHttpRequest();
  }
else
  {
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("status").innerHTML=xmlhttp.responseText;
    }
  };
xmlhttp.open("POST","php/newCustomerCheck.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("lastname="+encodeURIComponent(lastname.value));
document.getElementById("status").innerHTML="Checking...";
}
};
};