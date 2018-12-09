var map = new GMaps({
    el: '#map',
    lat:  50.865579,
    lng: 9.708483
});

map.addMarker({
    lat: 40.700610,
    lng: -73.997242,
    title: 'Kinderhaus',
    infoWindow: {
      content: 'Kinderhaus'
    }
});

map.setZoom(8);