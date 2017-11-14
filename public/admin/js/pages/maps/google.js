$(function () {
    var lat = document.getElementsByName('lat')[0];
    var lng = document.getElementsByName('lng')[0];

    if ((lat && lng) && (lat.value && lng.value)){
        //Basic Map
        var basicMap = new GMaps({
            el: '#gmap_basic_example',
            lat: lat.value,
            lng: lng.value,
            zoom:7
        });
        basicMap.removeMarkers();
        basicMap.addMarker({
            lat:lat.value,
            lng:lng.value
        });
    }else{
        //Basic Map
        var basicMap = new GMaps({
            el: '#gmap_basic_example',
            lat: 44.787197,
            lng: 20.457273,
            zoom:7
        });
    }

    google.maps.event.addListener(basicMap.map, 'click', function(event) {

        if(lat && lng){
            basicMap.removeMarkers();
            basicMap.addMarker({
                lat:event.latLng.lat(),
                lng:event.latLng.lng()
            });
            lat.value = event.latLng.lat();
            lng.value = event.latLng.lng();
        }

    });
});