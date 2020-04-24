
function basico() {

var contenidoHTML = null;
 var xhttp = new XMLHttpRequest();
 var url = 'servicio.php';
 var txtfirstname=document.getElementById("txtfirstname").value;
 var txtlastname=document.getElementById("txtlastname").value;

 var params = 'firstname='+txtfirstname+'&lastname='+txtlastname;

  xhttp.open("POST", url, true);
  xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');


  xhttp.send(params);

  xhttp.onreadystatechange = function() {
  	if (this.status == 404) {
  		console.log("No se encontró el archivo");
  	}

    if (this.readyState == 4 && this.status == 200) {
    	contenidoHTML = this.responseText;
     document.getElementById("mensaje").innerHTML = contenidoHTML;
    }
  };	
}
