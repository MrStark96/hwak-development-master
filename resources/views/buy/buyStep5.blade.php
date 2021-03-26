@extends('layouts.app')

@section('header_scripts')
@endsection

@section('content')
    <div class="heroSec aniView buy pink" style="background-image:url({{ asset('images/hawknest/4.jpg') }})" id="heroSec">
        <div class="birdNestR"></div>
        <div class="NestL"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10 col-md-8 col-lg-6 col-xl-5">
                    <div class="question">
                        Where would you like to live?
                    </div>

                    <div class="container-fluid answers" style="height: 280px;">
                        <form class="w-100 h-100" action="/buy-step-5" method="POST">
                            @csrf
                            <div id="map" style="width: 100%; height: 65%; margin-top: 15px; margin-bottom: 10px;">
                            </div>
                            <button class="btn btn-info">Next</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="toggleView">
            <input type="checkbox" id="toggleView">
            <label for="toggleView">
                <span>Animation</span>
                <span>Normal</span>
            </label>
        </div>
    </div>
@endsection

@section('footer_scripts')
    <script type="text/javascript">
        let toggleViewValue = false;

        toggleViewValue = {!! json_encode($toggleViewBuyValue) !!};
        let heroSec = document.getElementById('heroSec');
        let toggleView = document.getElementById('toggleView');

        if (toggleViewValue === "true") {
            heroSec.classList.remove("aniView");
            heroSec.classList.remove("normalView");
            heroSec.classList.add("normalView");
            toggleView.checked = true;
        } else {
            heroSec.classList.remove("aniView");
            heroSec.classList.remove("normalView");
            heroSec.classList.add("aniView");
            toggleView.checked = false;
        }

        let markersArray = [];
        let map;
        let polygon = null;
        let latitude = {!! json_encode($latitude) !!};
        let longitude = {!! json_encode($longitude) !!};

        function initMap() {
            let uluru = { lat: parseFloat(latitude), lng: parseFloat(longitude) };

            map = new google.maps.Map(
                document.getElementById('map'),
                { zoom: 10, center: uluru }
            );

            map.addListener('click', function(e) {
                addMarker(e.latLng);
                drawPolygon();
            });

            map.setOptions({ draggableCursor : "url(data:image/jpeg;base64,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), auto" })
        }

        function addMarker(latLng) {
            let marker = new google.maps.Marker({
                map: map,
                position: latLng,
                draggable: true
            });

            marker.addListener('position_changed', function() {
                drawPolygon();
            });

            markersArray.push(marker);
        }

        function drawPolygon() {
            let markersPositionArray = [];

            markersArray.forEach(function(e) {
                markersPositionArray.push(e.getPosition());
            });

            if (polygon !== null) {
                polygon.setMap(null);
            }

            polygon = new google.maps.Polygon({
                paths: markersPositionArray,
                strokeOpacity: 0.8,
                strokeColor: 'red',
                strokeWeight: 2,
                fillColor: 'red',
                fillOpacity: 0.35
            });

            polygon.setMap(map);

            $("#location").val('');
            let data = new Array();
            markersPositionArray.forEach(function(value) {
                data.push(value.toString());
            });

            $("#location").val(data);
        }
    </script>
@endsection
