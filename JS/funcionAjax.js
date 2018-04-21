function tabla (){
var intevalo = setInterval('load_tablas ()',1000);
}
function load_tablas (){
xmlhttp=new XMLHttpRequest();
xmlhttp.onreadystatechange=function() {
if (xmlhttp.readyState==4 && xmlhttp.status==200) {
document.getElementById("tablanom").innerHTML=xmlhttp.responseText;
}
}
xmlhttp.open("GET","tabla.php", true);
xmlhttp.send();
}
