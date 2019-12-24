mapboxgl.accessToken = 'pk.eyJ1IjoiZWxlbmFlbGkiLCJhIjoiY2p4aHcxZG9iMHBlMjN5bDl4MWNvcjYxeCJ9.nHRToLwEXYwSmEotKPhYyw';

var map = new mapboxgl.Map({
  container: 'map',
  style: 'mapbox://styles/mapbox/streets-v11',
  center: [8.69079, 49.40768],
  zoom: 10
});

var marker1 = new mapboxgl.Marker({
  draggable: true
})
.setLngLat([8.69079, 49.40768])
.addTo(map);

var marker2 = new mapboxgl.Marker({
  draggable: true
})
.setLngLat([8.7179, 49.42768])
.addTo(map);

function onDragEnd() {
var lngLat = marker1.getLngLat();
  coordinates.style.display = 'block';
  coordinates.innerHTML = 'Longitude: ' + lngLat.lng + '<br />Latitude: ' + lngLat.lat;
}

marker1.on('dragend', onDragEnd);
marker2.on('dragend', onDragEnd);
