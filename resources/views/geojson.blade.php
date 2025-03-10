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
                    {{-- <div id='decorative-map' inert></div> --}}

                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-+oZUuZJXq2U5ZUZb9zrj3p2yZUq4z0w6b8l5f7w1b9I=" crossorigin=""></script>
    <script>
        // Initialize the map and set its view.
        var map = L.map('map').setView([20.5, 96.5], 7);

        // Add a tile layer.
        var osm = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '© OpenStreetMap'
        });

        //
        var osmHOT = L.tileLayer('https://{s}.tile.openstreetmap.fr/hot/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '© OpenStreetMap contributors, Tiles style by Humanitarian OpenStreetMap Team hosted by OpenStreetMap France'
        });

        var openTopoMap = L.tileLayer('https://{s}.tile.opentopomap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: 'Map data: © OpenStreetMap contributors, SRTM | Map style: © OpenTopoMap (CC-BY-SA)'
        });

        var baseMaps = {
            "OpenStreetMap": osm,
            "OpenStreetMap.HOT": osmHOT,
            "OpenTopoMap": openTopoMap
        };
        osm.addTo(map);

        // Define your GeoJSON data.
        var geojsonFeature = {
            "type": "FeatureCollection",
            "features": [{
                    "type": "Feature",
                    "properties": {},
                    "geometry": {
                        "type": "LineString",
                        "coordinates": [
                            [96.26068457044755, 21.180310422446453],
                            [96.98240950411838, 21.17073045404281],
                            [96.61255758081285, 20.638076028097686],
                            [96.26068457044755, 21.165940237180195]
                        ]
                    }
                },
                {
                    "type": "Feature",
                    "properties": {
                        "marker-color": "#c44a4a",
                        "marker-size": "medium",
                        "marker-symbol": "circle"
                    },
                    "geometry": {
                        "type": "Point",
                        "coordinates": [96.9361797019522, 20.83024223552131]
                    },
                    "id": 1
                },
                {
                    "type": "Feature",
                    "properties": {},
                    "geometry": {
                        "type": "Point",
                        "coordinates": [95.8240555159054, 20.85664585527485]
                    }
                },
                {
                    "type": "Feature",
                    "properties": {},
                    "geometry": {
                        "type": "Point",
                        "coordinates": [95.97816048394878, 21.285649955821768]
                    }
                },
                {
                    "type": "Feature",
                    "properties": {},
                    "geometry": {
                        "type": "Point",
                        "coordinates": [96.05778138410312, 20.419193509113228]
                    }
                },
                {
                    "type": "Feature",
                    "properties": {},
                    "geometry": {
                        "type": "Point",
                        "coordinates": [96.920769205147, 20.580379851006924]
                    }
                }
            ]
        };

        // Create a GeoJSON layer and add the data.
        L.control.layers(baseMaps)
            // .bindPopup(function(layer) {
            //     return layer.feature.properties.description;
            // })
            .addTo(map);

        var myLayer = L.geoJSON(geojsonFeature).addTo(map);

        // Alternatively, you could directly addGeoJSON:
        // L.geoJSON(geojsonFeature).addTo(map);
    </script>
@endpush
