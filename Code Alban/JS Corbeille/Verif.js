console.log("Test")
document.getElementById("Verif").onclick=function(){
    if(document.getElementById("CIN").value.length<8 && document.getElementById("CIN").value.length!==0){
        console.log("TEST CIN POSITIF");
    }
    else{
        console.log("TEST CIN NEGATIF");
    }

    if(document.getElementById("name").value.length=0){
        console.log("TEST name POSITIF");
    }
    else{
        console.log("TEST name NEGATIF");
    }


    if(document.getElementById("mail").value.length=0){
        console.log("TEST mail POSITIF");
    }
    else{
        console.log("TEST mail NEGATIF");
    }

}