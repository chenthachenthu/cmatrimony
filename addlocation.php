<?php
include 'customerheader.php';
include 'connection.php';
?>

<style>
  
        #log{
            background-color: rgba(0, 150, 220, 0.5);
            margin: 10px 150px;
            padding: 50px;
            color: white;
            width: 1000px;
            float: left;
        }
        td,th{
            padding: 10px;
        }
        #tbl{
            width: 900px;
        }
        a{
            color: #ebd231;
        }
            table {
      border-collapse: collapse;
      border: none;
    }
    
    th{
        background-color: rgba(0, 100, 180, 0.7);
        color: #ebd231;
    }
    
</style>
<center>
<div style="margin: 50px;">
    <hr><h3>Add location</h3><hr>
    <form  action="#"  method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td rowspan="8">
                    Select location from map
                    <input id="pac-input" class="controls" type="text" placeholder="Search Box">
                
                     <div id="map"></div>
                     <input onclick="deleteMarkers();" type=button value="Refresh location">
                </td>
            </tr>
            
            <tr>
                <td><input type="text" id="l1" style="visibility: hidden;" required name="l1"><br>
                    <input type="text" id="l2" style="visibility: hidden;" required name="l2"></td>
            </tr>    
            <td><input type="submit" name='submit' class="btn btn-danger" style="margin-top:370px;margin-left:-90px;"  value="update"></td>
        </table>
        <hr>    




        <?php  

if (isset($_POST['submit'])){


  $email=$_SESSION['email'];
  $lat=$_POST['l1'];
  $lon=$_POST['l2'];
  $sql="update customer set `lat`='$lat',`lon`='$lon' where email='$email'";
   echo $sql;
   if (mysqli_query($con,$sql)){
    echo "<script>alert('Location Updated Successfully')</script>";
    echo "<script>location.href='customerhome.php'</script>";

   }else{

    echo "<script>alert('Failed')</script>";
    
   }

}

?>

    
<script>
   
    // This example adds a search box to a map, using the Google Place Autocomplete
                     // feature. People can enter geographical searches. The search box will return a
                     // pick list containing a mix of places and predicted search terms.
            
                     // This example requires the Places library. Include the libraries=places
                     // parameter when you first load the API. For example:
                     // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
            
                        function initAutocomplete() {
                         var map = new google.maps.Map(document.getElementById('map'), {
                             center: { lat: 10.1076, lng: 76.3457 },
                             zoom: 13,
                             mapTypeId: 'roadmap'
                         });
            
                         google.maps.event.addListener(map, "click", function (event) {
                             // get lat/lon of click
                             var clickLat = event.latLng.lat();
                             var clickLon = event.latLng.lng();
            
                             // show in input box
                             document.getElementById('l1').value = clickLat.toFixed(5);
                             document.getElementById('l2').value = clickLon.toFixed(5);
                            
                    var somefunction = function () {
                        var hdnfldVariable = document.getElementById('hdnfldVariable');
                        hdnfldVariable.value = clickLat.toFixed(5);
                    }
               
            
            
                             var marker = new google.maps.Marker({
                                 position: new google.maps.LatLng(clickLat, clickLon),
                                 map: map,
                                 draggable:true
                             });
                         });
            
            
                         // Create the search box and link it to the UI element.
                         var input = document.getElementById('pac-input');
                         var searchBox = new google.maps.places.SearchBox(input);
                         map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
            
                         // Bias the SearchBox results towards current map's viewport.
                         map.addListener('bounds_changed', function () {
                             searchBox.setBounds(map.getBounds());
                         });
            
                         var markers = [];
                         // Listen for the event fired when the user selects a prediction and retrieve
                         // more details for that place.
                         searchBox.addListener('places_changed', function () {
                             var places = searchBox.getPlaces();
            
                             if (places.length == 0) {
                                 return;
                             }
            
                             // Clear out the old markers.
                            
                             markers.forEach(function (marker) {
                                debugger;
                                 marker.setMap(null);
                                 
                                
                             });
                             markers = [];
             

                             // For each place, get the icon, name and location.
                             var bounds = new google.maps.LatLngBounds();
                             places.forEach(function (place) {
                                 if (!place.geometry) {
                                     console.log("Returned place contains no geometry");
                                     return;
                                 }
                                 var icon = {
                                     url: place.icon,
                                     size: new google.maps.Size(71, 71),
                                     origin: new google.maps.Point(0, 0),
                                     anchor: new google.maps.Point(17, 34),
                                     scaledSize: new google.maps.Size(25, 25)
                                 };
            
                                 // Create a marker for each place.
                                 markers.push(new google.maps.Marker({
                                     map: map,
                                     icon: icon,
                                     title: place.name,
                                     position: place.geometry.location
                                 }));
            
                                 if (place.geometry.viewport) {
                                     // Only geocodes have viewport.
                                     bounds.union(place.geometry.viewport);
                                 } else {
                                     bounds.extend(place.geometry.location);
                                 }
                             });
                             map.fitBounds(bounds);
                         });
                     }
            
                </script>
                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBRhhnbNUXPX9_JYKnroSAex2-1KFaSmwQ&libraries=places&callback=initAutocomplete"></script>
<style>
    td,th{
        padding: 5px;
    }
    /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
         #map {
          height: 400px;
          width:500px;
          border-style:groove;
          border-width:thick;
          /*margin-left:300px;
          margin-top:30px;
          margin-bottom:30px;*/
        }
        /* Optional: Makes the sample page fill the window. */
        html, body {
          height: 100%;
          margin: 0;
          padding: 0;
        }
        #description {
          font-family: Roboto;
          font-size: 15px;
          font-weight: 300;
        }
  
        #infowindow-content .title {
          font-weight: bold;
        }
  
        #infowindow-content {
          display: none;
        }
  
        #map #infowindow-content {
          display: inline;
        }
  
        .pac-card {
          margin: 10px 10px 0 0;
          border-radius: 2px 0 0 2px;
          box-sizing: border-box;
          -moz-box-sizing: border-box;
          outline: none;
          box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
          background-color: #fff;
          font-family: Roboto;
        }
  
        #pac-container {
          padding-bottom: 12px;
          margin-right: 12px;
        }
  
        .pac-controls {
          display: inline-block;
          padding: 5px 11px;
        }
  
        .pac-controls label {
          font-family: Roboto;
          font-size: 13px;
          font-weight: 300;
        }
  
        #pac-input {
          background-color: #fff;
          font-family: Roboto;
          font-size: 15px;
          font-weight: 300;
          margin-left: 12px;
          padding: 0 11px 0 13px;
          text-overflow: ellipsis;
          width: 400px;
        }
  
        #pac-input:focus {
          border-color: #4d90fe;
        }
  
        #title {
          color: #fff;
          background-color: #4d90fe;
          font-size: 25px;
          font-weight: 500;
          padding: 6px 12px;
        }
        #target {
          width: 345px;
        }
</style>

<?php

include 'footer.php'

?>
