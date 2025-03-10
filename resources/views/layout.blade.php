@extends('layouts.app')
@push('styles')
    <style>
        #map {
            height: 500px;
            width: 100%;
        }
    </style>
@endpush

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                world
                <div class="card">
                    <div id="map"></div>


                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-+oZUuZJXq2U5ZUZb9zrj3p2yZUq4z0w6b8l5f7w1b9I=" crossorigin=""></script>
    <script>
        // var map = L.map('map').fitWorld();
        // Base tile layers
        var osm = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '© OpenStreetMap'
        });

        var osmHOT = L.tileLayer('https://{s}.tile.openstreetmap.fr/hot/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '© OpenStreetMap contributors, Tiles style by Humanitarian OpenStreetMap Team hosted by OpenStreetMap France'
        });

        var openTopoMap = L.tileLayer('https://{s}.tile.opentopomap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: 'Map data: © OpenStreetMap contributors, SRTM | Map style: © OpenTopoMap (CC-BY-SA)'
        });

        // Create the map only once using one of the base layers (osm)
        var map = L.map('map', {
            center: [39.73, -104.99],
            zoom: 10,
            layers: [osm]
        });

        // Optional: locate current position
        map.locate({
            setView: true,
            maxZoom: 16
        });

        map.on('locationfound', function(e) {
            var radius = e.accuracy;
            L.marker(e.latlng).addTo(map)
                .bindPopup("You are within " + radius + " meters from this point").openPopup();
            L.circle(e.latlng, radius).addTo(map);
        });

        map.on('locationerror', function(e) {
            alert(e.message);
        });

        // Layers for markers (example parks)
        var crownHill = L.marker([39.75, -105.09]).bindPopup('This is Crown Hill Park.'),
            rubyHill = L.marker([39.68, -105.00]).bindPopup('This is Ruby Hill Park.');

        var parks = L.layerGroup([crownHill, rubyHill]);

        // Base layers control
        var baseMaps = {
            "OpenStreetMap": osm,
            "OpenStreetMap.HOT": osmHOT,
            "OpenTopoMap": openTopoMap
        };

        // Overlay layers (if you plan to add more, for now we add parks)
        var overlayMaps = {
            "Parks": parks
            // If needed, add "Cities": cities, but ensure cities is defined.
        };

        L.control.layers(baseMaps, overlayMaps).addTo(map);
        parks.addTo(map); // add the overlay by default

        // Show popup on map click
        map.on('click', function(e) {
            L.popup()
                .setLatLng(e.latlng)
                .setContent("You clicked the map at " + e.latlng.toString())
                .openOn(map);
        });
    </script>
@endpush
