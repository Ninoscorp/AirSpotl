<?php
session_start();

function callAPI ($url, $conv){
$curls = curl_init();
curl_setopt($curls, CURLOPT_URL, 'https://test.api.amadeus.com/v1/security/oauth2/token');
curl_setopt($curls, CURLOPT_POST, true);
curl_setopt($curls, CURLOPT_POSTFIELDS, "grant_type=client_credentials&client_id=xW1TTpZTA2gNGuGPAmCIN8r8znKECHE0&client_secret=v72HcGN5xRuWwmtX");
curl_setopt($curls, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
curl_setopt($curls, CURLOPT_RETURNTRANSFER, true);
$token = curl_exec($curls);
$data = json_decode($token,true);

curl_setopt($curls, CURLOPT_URL, $url);
curl_setopt($curls, CURLOPT_POST, false);

curl_setopt($curls, CURLOPT_HTTPHEADER, array('Authorization: Bearer ' .$data['access_token']));
$result = curl_exec($curls);
    if (curl_errno($curls)) {
        echo 'Error:' . curl_error($curls);
    }

return json_decode($result, $conv);

}

$iata = file_get_contents("iata.json");
$iiata = json_decode($iata, true);
if(isset($_POST["pregled"])){
    $url = "https://test.api.amadeus.com/v2/shopping/flight-offers?";
    $url2 = "https://test.api.amadeus.com/v1/analytics/itinerary-price-metrics?";
    if(isset($_POST["originLocationCode"]) && $_POST["originLocationCode"]!="") $url.= "originLocationCode=".$_POST["originLocationCode"];
    if(isset($_POST["destinationLocationCode"])&& $_POST["destinationLocationCode"]!="") $url.= "&destinationLocationCode=".$_POST["destinationLocationCode"];
    if(isset($_POST["departureDate"])&& $_POST["departureDate"]!="") $url.= "&departureDate=".date("Y-m-d", strtotime($_POST["departureDate"]));
    if(isset($_POST["returnDate"])&& $_POST["returnDate"]!="") $url.= "&returnDate=".date("Y-m-d", strtotime($_POST["returnDate"]));
    if(isset($_POST["adults"])&& $_POST["adults"]!="") $url.= "&adults=".$_POST["adults"];
    if(isset($_POST["oneWay"])&& $_POST["oneWay"]!="") $url.= "&oneWay=".$_POST["oneWay"];
    if(isset($_POST["duration"])&& $_POST["duration"]!="") $url.= "&duration=".$_POST["duration"];
    if(isset($_POST["nonStop"])&& $_POST["nonStop"]!="") $url.= "&nonStop=".$_POST["nonStop"];
    if(isset($_POST["maxPrice"])&& $_POST["maxPrice"]!="") $url.= "&maxPrice=".$_POST["maxPrice"];
    if(isset($_POST["travelClass"])&& $_POST["travelClass"]!="") $url.= "&travelClass=".$_POST["travelClass"];

    if(isset($_POST["originLocationCode"]) && $_POST["originLocationCode"]!="") $url2.= "originIataCode=".$_POST["originLocationCode"];
    if(isset($_POST["destinationLocationCode"])&& $_POST["destinationLocationCode"]!="") $url2.= "&destinationIataCode=".$_POST["destinationLocationCode"];
    if(isset($_POST["departureDate"])&& $_POST["departureDate"]!="") $url2.= "&departureDate=".date("Y-m-d", strtotime($_POST["departureDate"]));
    $url2 .= "&currencyCode=EUR&oneWay=true";
    $url .= "&max=20";
    $result = callAPI($url,true);
    $cijena = callAPI($url2,true);
    
  }


    if(isset($_POST["traveledAndBooked"])){
        $url = "https://test.api.amadeus.com/v1/travel/analytics/air-traffic/traveled?";

        if(isset($_POST["originCityCode"]) && $_POST["originCityCode"]!="") $url.= "originCityCode=".$_POST["originCityCode"];
        if(isset($_POST["period"])&& $_POST["period"]!="") $url.= "&period=".$_POST["period"];
        $url .= "&max=30&page%5Blimit%5D=30&page%5Boffset%5D=0";

        if(isset($_POST["sort"])&& $_POST["sort"]!="") $url.= "&sort=".$_POST["sort"];


        $traveled = callAPI($url,true);

        $url = "https://test.api.amadeus.com/v1/travel/analytics/air-traffic/booked?";

        if(isset($_POST["originCityCode"]) && $_POST["originCityCode"]!="") $url.= "originCityCode=".$_POST["originCityCode"];
        if(isset($_POST["period"]) && $_POST["period"]!="") $url.= "&period=".$_POST["period"];
        $url .= "&max=30&page%5Blimit%5D=30&page%5Boffset%5D=0";

        if(isset($_POST["sort"])&& $_POST["sort"]!="") $url.= "&sort=".$_POST["sort"];


        $booked = callAPI($url,true);

      }

      if(isset($_POST["delay"])){
          $url = "https://test.api.amadeus.com/v1/travel/predictions/flight-delay?";

          if(isset($_POST["originLocationCode"]) && $_POST["originLocationCode"]!="") $url.= "originLocationCode=".$_POST["originLocationCode"];
          if(isset($_POST["destinationLocationCode"]) && $_POST["destinationLocationCode"]!="") $url.= "&destinationLocationCode=".$_POST["destinationLocationCode"];
          if(isset($_POST["departureDate"]) && $_POST["departureDate"]!="") $url.= "&departureDate=".date("Y-m-d", strtotime($_POST["departureDate"]));
          if(isset($_POST["departureTime"]) && $_POST["departureTime"]!="") $url.= "&departureTime=".$_POST["departureTime"];
          if(isset($_POST["arrivalDate"]) && $_POST["arrivalDate"]!="") $url.= "&arrivalDate=".$_POST["arrivalDate"];
          if(isset($_POST["arrivalTime"]) && $_POST["arrivalTime"]!="") $url.= "&arrivalTime=".$_POST["arrivalTime"];
          if(isset($_POST["aircraftCode"]) && $_POST["aircraftCode"]!="") $url.= "&aircraftCode=".$_POST["aircraftCode"];
          if(isset($_POST["carrierCode"]) && $_POST["carrierCode"]!="") $url.= "&carrierCode=".$_POST["carrierCode"];
          if(isset($_POST["flightNumber"]) && $_POST["flightNumber"]!="") $url.= "&flightNumber=".$_POST["flightNumber"];
          if(isset($_POST["duration"]) && $_POST["duration"]!="") $url.= "&duration=".$_POST["duration"];



          $delay = callAPI($url,true);


        }

        if(isset($_POST["on-time"])){
          $url = "https://test.api.amadeus.com/v1/airport/predictions/on-time?";

          if(isset($_POST["airportCode"]) && $_POST["airportCode"]!="") $url.= "airportCode=".$_POST["airportCode"];
          if(isset($_POST["date"])&& $_POST["date"]!="") $url.= "&date=".$_POST["date"];


          $onTime = callAPI($url,true);
          echo '<script language="javascript">';
          echo 'alert("'.$onTime.'")';
          echo '</script>';
        }
        if(isset($_POST["map"])){
          $url = "https://test.api.amadeus.com/v2/schedule/flights?";
          if(isset($_POST["carrierCode"]) && $_POST["carrierCode"]!="") $url.= "carrierCode=".$_POST["carrierCode"];
          if(isset($_POST["flightNumber"]) && $_POST["flightNumber"]!="") $url.= "&flightNumber=".$_POST["flightNumber"];
          if(isset($_POST["scheduledDepartureDate"]) && $_POST["scheduledDepartureDate"]!="") $url.= "&scheduledDepartureDate=".date("Y-m-d", strtotime($_POST["scheduledDepartureDate"]));

          $map = callAPI($url, true);
          $lociata = array();
          $lociatalat = array();
          $lociatalon = array();
          
  
          foreach ($map["data"] as $key => $value){
            foreach($value["flightPoints"] as $key2 => $value2){
              array_push($lociata, $value2["iataCode"]);
            }
            
          }
          foreach ($lociata as $key => $value) {
          for($i=0; $i < count($iiata); $i++){
              if($iiata[$i]["iata"]==$value){
                array_push($lociatalat, $iiata[$i]["lat"]);
                array_push($lociatalon, $iiata[$i]["lon"]);
                
              }
            }
            
  
          }
          $latav = ($lociatalat[0]+$lociatalat[count($lociatalat)-1])/2;
          $lonav = ($lociatalon[0]+$lociatalon[count($lociatalon)-1])/2;
        }
        

?>
