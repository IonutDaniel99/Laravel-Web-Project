function GoogleButton() {
    navigator.geolocation.getCurrentPosition(success);

    function success(position) {
        var GEOCODING = 'https://maps.googleapis.com/maps/api/geocode/json?latlng=' + position.coords.latitude + '%2C' + position.coords.longitude + '&language=en&key=AIzaSyBDZXSOQThl5bVvvTghv2uo2iLcUJFSve8';
        fetch(GEOCODING).then(function (response) {
            return response.json()
        }).then(function (json) {
            var CityName = json.results[0].address_components[0].long_name;
            window.open("https://www.google.com/search?q=" + CityName);
        });
    }
}

function MapsButton() {
    navigator.geolocation.getCurrentPosition(success);

    function success(position) {
        window.open("https://www.google.com/maps/@" + position.coords.latitude + "," + position.coords.longitude + ",15z");
    }
}

function WikiButton() {
    navigator.geolocation.getCurrentPosition(success);

    function success(position) {
        var GEOCODING = 'https://maps.googleapis.com/maps/api/geocode/json?latlng=' + position.coords.latitude + '%2C' + position.coords.longitude + '&language=en&key=AIzaSyBDZXSOQThl5bVvvTghv2uo2iLcUJFSve8';
        fetch(GEOCODING).then(function (response) {
            return response.json()
        }).then(function (json) {
            var CityName = json.results[0].address_components[0].long_name;
            window.open("https://en.wikipedia.org/wiki/" + CityName);
        });
    }
}

function BookingButton() {
    fetch('https://ipinfo.io/?token=e0b00bfba21a07').then(function (response) {
        return response.json()
    }).then(function (json) {
        var CityName = json.city;
        window.open("https://moovitapp.com/?");
    });
}

function TripAdvisorButton() {
    navigator.geolocation.getCurrentPosition(success);

    function success(position) {
        var GEOCODING = 'https://maps.googleapis.com/maps/api/geocode/json?latlng=' + position.coords.latitude + '%2C' + position.coords.longitude + '&language=en&key=AIzaSyBDZXSOQThl5bVvvTghv2uo2iLcUJFSve8';
        fetch(GEOCODING).then(function (response) {
            return response.json()
        }).then(function (json) {
            var CityName = json.results[0].address_components[0].long_name;
            window.open("https://www.tripadvisor.com/Search?q=" + CityName);
        });
    }
}

function AirBnbButton() {
    navigator.geolocation.getCurrentPosition(success);

    function success(position) {
        var GEOCODING = 'https://maps.googleapis.com/maps/api/geocode/json?latlng=' + position.coords.latitude + '%2C' + position.coords.longitude + '&language=en&key=AIzaSyBDZXSOQThl5bVvvTghv2uo2iLcUJFSve8';
        fetch(GEOCODING).then(function (response) {
            return response.json()
        }).then(function (json) {
            var CityName = json.results[0].address_components[0].long_name;
            window.open("https://www.airbnb.com/s/" + CityName);
        });
    }
}
