function todo() {


  const xhttp = new XMLHttpRequest();  //creando el objeto para trabajar
  xhttp.onload = function () {
    var data = this.responseText
    data = JSON.parse(data);
    document.getElementById("lat").innerHTML = data.Latitud
    document.getElementById("lng").innerHTML = data.Longitud
    document.getElementById("date").innerHTML = data.Fecha

    //Mapa
    var container = L.DomUtil.get('map')

    //Mapas if
    if (container != null) {
      container._leaflet_id = null;
    }


    if (map) {
      map.invalidateSize(); // Si hay un mapa, lo elimina para recrearlo y que se pueda cambiar actualmente la posición ##
    }

    //Declaracion del mapa
    var map = L.map('map');

    map = L.map('map').setView([data.Latitud, data.Longitud], 13);

    //Estilo del mapa
    var tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

    function table() {

      //Marcador
      var marker = L.marker([data.Latitud, data.Longitud]).addTo(map)
        .bindPopup('<b>' + data.Fecha + '</b>' + '<br />' + data.Latitud + ' ' + data.Longitud).openPopup();

      xhttp.open("GET", "datadb.php");  // documento que estamos llamando
      xhttp.send();
    }

    table()
    setInterval(table, 3000)
  }
}