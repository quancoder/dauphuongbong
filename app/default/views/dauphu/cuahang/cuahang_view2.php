<!DOCTYPE html>
<html>
<head>
    <title>Cambodia Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style>
        #map {
            height: 70%;
            width: 70%;
        }
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
<div id="map"></div>
<script>
    var map;
    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 21.0227788, lng: 105.8019441},
            zoom: 12
        });

        //call marker function
        addMarker({lat:21.0127788,lng:105.799939});
        addMarker({lat:21.0227788,lng:105.799939});
        addMarker({lat:21.0327788,lng:105.799939});
        addMarker({lat:21.0427788,lng:105.799939});

        addMarker({lat:21.0127788,lng:105.719939});
        addMarker({lat:21.0227788,lng:105.729939});
        addMarker({lat:21.0327788,lng:105.739939});
        addMarker({lat:21.0427788,lng:105.749939});

        addMarker({lat:21.0117788,lng:105.700939});
        addMarker({lat:21.0227788,lng:105.710939});
        addMarker({lat:21.0337788,lng:105.720939});
        addMarker({lat:21.0447788,lng:105.730939});

        //add marker function
        function addMarker(coords){
            var marker = new google.maps.Marker({
                position:coords,
                map:map,
                icon:'images/shoppingcart_pinlet-2-medium.png',
            });
        }
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDg945v29-ecA_WktGp3cXxK8e6Y34if3Y&callback=initMap" async defer></script>
</body>
</html>