

function table(){
    const xhttp = new XMLHttpRequest();  //creando el objeto para trabajar
    xhttp.onload = function(){
        var data = this.responseText
        data = JSON.parse(data);
        document.getElementById("lat").innerHTML = data.Latitud
        document.getElementById("lng").innerHTML = data.Longitud
        document.getElementById("date").innerHTML = data.Fecha

        var container = L.DomUtil.get('map');

        if(container != null){

        container._leaflet_id = null;

        }
        
        if(map) {
        map.invalidateSize();
        }

        var map = L.map('map');

        map = L.map('map').setView([data.Latitud, data.Longitud], 17);
        
        var tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="http://gpstrack.sytes.net/">GPS Tracker</a>'
                }).addTo(map);
        
        var marker = L.marker([data.Latitud, data.Longitud]).addTo(map)
                .bindPopup('<b>' + data.Fecha + '</b>' + '<br />' + data.Latitud + ' ' + data.Longitud).openPopup();
    }

    xhttp.open("GET", "datadb.php");  // documento que estamos llamando
    xhttp.send();
  }
  setInterval(function(){   //creamos un intervalo para realizar el mismo request del archivo que genera la conexión con la base de datos
    table();
  }, 5000);