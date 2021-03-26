// let markersArray = [];
// let map;
// let polyLine = null;
//
// function initMap() {
//     let uluru = { lat: -25.344, lng: 131.036 }
//     map = new google.maps.Map(
//         document.getElementById('map'),
//         { zoom: 4, center: uluru }
//     );
//
//     map.addListener('click', function(e) {
//         addMarker(e.latLng);
//         drawPolyLine();
//     });
// }
//
// function addMarker(latLng) {
//     let marker = new google.maps.Marker({
//         map: map,
//         position: latLng,
//         draggable: true
//     });
//
//     marker.addListener('position_changed', function() {
//         // drawPolyLine();
//     });
//
//     markersArray.push(marker);
// }
//
// function drawPolyLine() {
//     let markersPositionArray = [];
//
//     markersArray.forEach(function(e) {
//         markersPositionArray.push(e.getPosition());
//     });
//
//     if (polyLine !== null) {
//         polyline.setMap(null);
//     }
//
//     polyline = new google.maps.Polyline({
//         map: map,
//         path: markersPositionArray,
//         strokeOpacity: 0.4,
//         strokeColor: 'red'
//     });
//
//     $("#location").val('');
//     let data = new Array();
//     markersPositionArray.forEach(function(value) {
//         data.push(value.toString());
//     });
//
//     $("#location").val(data);
// }
