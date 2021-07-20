(function() {
    var mymap = L.map('mapid').setView([19.25393341399109, -103.72699149352016], 15);
        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 18,
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1,
        accessToken: 'pk.eyJ1IjoibWlrZW9jZW0iLCJhIjoiY2tyY2ViczFoNTI2MjMxbzhkaXN3aG92diJ9.wLFucybv0mc-MDKxzTTCKg'
    }).addTo(mymap);
    L.control.scale().addTo(mymap);
    var marker = L.marker([19.25393341399109, -103.72699149352016]).addTo(mymap);
    marker.bindPopup("<b>¡Nos encontramos aquí!</b><br>").openPopup();
}());