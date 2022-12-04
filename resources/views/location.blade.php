<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Check Location IP Address</title>
</head>     
<body>
    <div style="text-align: center">
        <h3>Get Location With Ip Address</h6>
        @if($location)
            <div class="mt-2">
                <p><b>Ip Address: </b>{{ $location->ip }}</p>
                <p><b>Country Code: </b>{{ $location->countryName }}</p>
                <p><b>Country Code: </b>{{ $location->countryCode }}</p>
                <p><b>Region Name: </b>{{ $location->regionName }}</p>
                <p><b>Region Code: </b>{{ $location->regionCode }}</p>
                <p><b>City Name: </b>{{ $location->cityName }}</p>
                <p><b>Zip Code: </b>{{ $location->zipCode }}</p>
                <p><b>Latitude: </b>{{ $location->latitude }}</p>
                <p><b>Area Code: </b>{{ $location->areaCode }}</p>
                <p><b>Timezone: </b>{{ $location->timezone }}</p>
            </div>
        @else
            <p>not found</p>
        @endif
    </div>
</body>
</html>