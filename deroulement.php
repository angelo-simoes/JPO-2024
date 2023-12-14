<?php
/*
Template Name: Deroulement
*/
?>
<?php get_header(); ?>
    <div>
        <?php the_content(); ?>
    </div>

    
<div>

    <div id="map" style="width: 100%; height: 400px;"></div>

    <script>
        var map;

        function init() {
            map = new OpenLayers.Map("map");
            var mapnik = new OpenLayers.Layer.OSM();
            map.addLayer(mapnik);

            var lonLat = new OpenLayers.LonLat(2.3522, 48.8566)
                .transform(
                    new OpenLayers.Projection("EPSG:4326"), // transform from WGS 1984
                    map.getProjectionObject() // to Spherical Mercator Projection
                );

            var markers = new OpenLayers.Layer.Markers("Markers");
            map.addLayer(markers);

            var marker = new OpenLayers.Marker(lonLat);
            markers.addMarker(marker);

            // Add popup to the marker
            var popup = new OpenLayers.Popup("popup",
                lonLat,
                new OpenLayers.Size(200, 50),
                "Votre position",
                true
            );
            marker.events.register("mousedown", marker, function (evt) {
                map.addPopup(popup);
            });

            map.setCenter(lonLat, 15);
        }

        // Appeler la fonction d'initialisation une fois que la page est chargée
        window.onload = init;
    </script>
</div>


<?php get_footer(); ?>
