<script>
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            //console.log(position);
            var lat = position.coords.latitude;
            var lng = position.coords.longitude;

            var json = {
                id: lat,
                long: lng
            }
            console.log(JSON.stringify(json));
        });
    }
</script>

