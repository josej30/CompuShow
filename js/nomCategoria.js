var xmlhttp;

function showUser(str)
{
  xmlhttp=GetXmlHttpObject();
  if (xmlhttp==null)
  {
    alert ("Browser does not support HTTP Request");
    return;
  }
  if (str=="COMPULOVE"){
    prende();
  } else {
    apaga();
  }
  if (str=="COMPUCARTOON"){
    prendeCartoon();
  } else {
    apagaCartoon();
  }


  var url="table/nominaciones.php";
  url=url+"?q="+str;
  url=url+"&sid="+Math.random();
  xmlhttp.onreadystatechange=stateChanged;
  xmlhttp.open("GET",url,true);
  xmlhttp.send(null);
}

function imprimeChat(str)
{
  xmlhttp=GetXmlHttpObject();
  if (xmlhttp==null)
  {
    alert ("Browser does not support HTTP Request");
    return;
  }
  var url="table/imprimeChat.php";
  url=url+"?q="+str;
  xmlhttp.onreadystatechange=stateChanged2;
  xmlhttp.open("GET",url,true);
  xmlhttp.send(null);
}

function stateChanged()
{
  if (xmlhttp.readyState==4)
  {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
  }
}

function stateChanged2()
{
  if (xmlhttp.readyState==4)
  {
    document.getElementById("txtHint2").innerHTML=xmlhttp.responseText;
  }
}



function GetXmlHttpObject()
{
  if (window.XMLHttpRequest)
  {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    return new XMLHttpRequest();
  }
  if (window.ActiveXObject)
  {
    // code for IE6, IE5
    return new ActiveXObject("Microsoft.XMLHTTP");
  }
  return null;
}

function agregarNominado(){
  var y = document.getElementById("nombreNominado3");
  var x = document.getElementById("agregar");
  if (x.value=="+"){
    y.type="text";
    x.value= "-"  
  } else {
    y.type="hidden";
    x.value="+";
  }
}

function apaga(){ 
  var x = document.getElementById("agregar");
  x.type="hidden";  
  var y = document.getElementById("nombreNominado2");
  y.type="hidden";  
  var z = document.getElementById("nombreNominado3");
  z.type="hidden";  
}


function prende(){ 
  var x = document.getElementById("agregar");
  x.type="button";  
  var x = document.getElementById("nombreNominado2");
  x.type="text";  
}

function prendeCartoon(){ 
  var x = document.getElementById("cartoon");
  x.type="text";  
}

function apagaCartoon(){ 
  var x = document.getElementById("cartoon");
  x.type="hidden";  
}


