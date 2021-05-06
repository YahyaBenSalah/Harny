function delconfirm(str,path){
    console.log("test");
	document.getElementById("dellink"+str).setAttribute("href","commission_delete"+path+".php?id"+path+"="+str);
}