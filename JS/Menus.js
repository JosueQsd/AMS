function Admin (){
  xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
  if (xmlhttp.readyState==4 && xmlhttp.status==200) {
  document.getElementById("MenuAdmin").innerHTML=xmlhttp.responseText;
  }
  }
  xmlhttp.open("GET","AMSZ/MenuAdmin.php", true);
  xmlhttp.send();


var intevalo = setInterval('load_Admin ()',20000);
}
function load_Admin (){
xmlhttp=new XMLHttpRequest();
xmlhttp.onreadystatechange=function() {
if (xmlhttp.readyState==4 && xmlhttp.status==200) {
document.getElementById("MenuAdmin").innerHTML=xmlhttp.responseText;
}
}
xmlhttp.open("GET","AMSZ/MenuAdmin.php", true);
xmlhttp.send();
}


function User (){
  xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
  if (xmlhttp.readyState==4 && xmlhttp.status==200) {
  document.getElementById("MenuUser").innerHTML=xmlhttp.responseText;
  }
  }
  xmlhttp.open("GET","AMSX/MenuUsuario.php", true);
  xmlhttp.send();



var intevalo = setInterval('load_User ()',20000);
}
function load_User (){
xmlhttp=new XMLHttpRequest();
xmlhttp.onreadystatechange=function() {
if (xmlhttp.readyState==4 && xmlhttp.status==200) {
document.getElementById("MenuUser").innerHTML=xmlhttp.responseText;
}
}
xmlhttp.open("GET","AMSX/MenuUsuario.php", true);
xmlhttp.send();
}
