<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>GPS Tracker</title>
  </head>
  <body onload = "table();">
    <script type="text/javascript">
      function table(){    
        const xhttp = new XMLHttpRequest();  //creando el objeto para trabajar
        xhttp.onload = function(){      
          document.getElementById("table").innerHTML = this.responseText;  //obtendra la tabla del documento al cual estamos llamando
        }
        xhttp.open("GET", "datadb.php");  // documento que estamos llamando
        xhttp.send();
      }

      setInterval(function(){   //creamos un intervalo para realizar el mismo request del archivo que genera la conexi�n con la base de datos
        table();
      }, 1000);
    </script>
    <div id="table">

    </div>
  </body>
</html>
