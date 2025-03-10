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
                <div class="card">
                    {{-- <h1 class="text-center">Gis</h1> --}}
                    <div id="map"></div>

                    {{-- <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div> --}}
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-+oZUuZJXq2U5ZUZb9zrj3p2yZUq4z0w6b8l5f7w1b9I=" crossorigin=""></script>
    <script>
        // world map
        // var map = L.map('map').fitWorld();
        // L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        //     maxZoom: 19,
        //     attribution: '© OpenStreetMap'
        // }).addTo(map);

        var map = L.map('map').setView([16.8409, 96.1735], 15);

        var circle = L.circle([16.8409, 96.1735], {
                color: 'red',
                fillColor: '#f03',
                fillOpacity: 0.5,
                radius: 500,
            }).bindPopup('Circle Area')
            .addTo(map);

        var polygon = L.polygon([
                [16.8409, 96.1734],
                [12.8409, 60.1495],
                [14.8409, 92.1243]
            ]).bindPopup('Polygon Area')
            .addTo(map);

        // var popup = L.popup()
        //     .setLatLng([25.8409, 150.1735], {
        //         fillOpacity: 1,
        //         fillColor: 'blue',
        //         color: 'blue'
        //     })
        //     .setContent("I am a standalone popup.")
        //     .openOn(map);

        // touch location
        var popup = L.popup();
        function onMapClick(e) {
            popup
                .setLatLng(e.latlng)
                .setContent("You clicked the map at " + e.latlng.toString())
                .openOn(map);
        }
        map.on('click', onMapClick);
        //

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '© dpsmap.com'
        }).addTo(map);

        //
        L.marker([16.8409, 96.1735]).addTo(map)
            .bindPopup('Mine Area')
            .openPopup();


        map.locate({
            setView: true,
            maxZoom: 16
        });
        // //
        // function onMapClick(e) {
        //     alert("You clicked the map at " + e.latlng);
        // }

        // map.on('click', onMapClick)
    </script>
@endpush
