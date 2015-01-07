// JavaScript Document
function changeDiv(Obj){
switch(Obj.id){
	case "1":
			document.getElementById("mainContent").style.display = "block";
			document.getElementById("menberShow").style.display = "none";
			document.getElementById("meeting").style.display = "none";
			document.getElementById("vote").style.display = "none";
			break
	case "2":
			document.getElementById("mainContent").style.display = "none";
			document.getElementById("menberShow").style.display = "block";
			document.getElementById("meeting").style.display = "none";
			document.getElementById("vote").style.display = "none";
			break
	case "3":
			document.getElementById("mainContent").style.display = "none";
			document.getElementById("menberShow").style.display = "none";
			document.getElementById("meeting").style.display = "block";
			document.getElementById("vote").style.display = "none";
			break
	case "4":
			document.getElementById("mainContent").style.display = "none";
			document.getElementById("menberShow").style.display = "none";
			document.getElementById("meeting").style.display = "none";
			document.getElementById("vote").style.display = "block";
			break		
		}
		}