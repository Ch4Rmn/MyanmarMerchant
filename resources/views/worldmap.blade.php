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
        // start important
        var map = L.map('map', {
            keyboard: true, // ကီးဘုတ်နဲ့ ထိန်းချုပ်လို့ရအောင်
            dragging: true, // မောက်စ်နဲ့ ဆွဲလို့ရအောင်
            zoomControl: true // Zoom ခလုတ်ထည့်ထားတယ်
        }).fitWorld();

        // draw map
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '© OpenStreetMap'
        }).addTo(map);


        // navigator.geolocation.getCurrentPosition(function(location) {
        //     var latlng = new L.LatLng(location.coords.latitude, location.coords.longitude);
        //     map.setView(latlng, 16);
        //     L.marker(latlng).addTo(map)
        //         .bindPopup("You are here").openPopup();
        // });


        // req current location
        map.locate({
            setView: true,
            maxZoom: 16
        });

        // show current location
        function onLocationFound(e) {
            var radius = e.accuracy;
            L.marker(e.latlng).addTo(map)
                .bindPopup("You are within " + radius + " meters from this point").openPopup();
            L.circle(e.latlng, radius).addTo(map);
        }
        map.on('locationfound', onLocationFound);

        // touch location
        var popup = L.popup();

        function onMapClick(e) {
            popup
                .setLatLng(e.latlng)
                .setContent("You clicked the map at " + e.latlng.toString())
                .openOn(map);
        }
        map.on('click', onMapClick);

        // show error if location not found
        function onLocationError(e) {
            alert(e.message);
        }
        map.on('locationerror', onLocationError);

        // layers
    </script>
@endpush
