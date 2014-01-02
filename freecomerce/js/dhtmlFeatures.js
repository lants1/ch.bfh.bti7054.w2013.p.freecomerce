function dhtmlBlinker() {
	   obj=document.getElementById("blink");
	   if (obj.style.visibility=="hidden") obj.style.visibility="visible";
	      else obj.style.visibility="hidden";
	   window.setTimeout("dhtmlBlinker();",300);
	}