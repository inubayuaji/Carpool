//Make datepicker
var d1 = datepicker('#berangkat');
var d2 = datepicker('#pulang');
//Inital Mapvar place1;
var place1;
var palce2;
function initMap(){
  var directionsService = new google.maps.DirectionsService;
  var directionsDisplay = new google.maps.DirectionsRenderer;
  //Make autocomplete
  var input1 = document.getElementById('dari');
  var input2 = document.getElementById('ke');
  var autocomplete1 = new google.maps.places.Autocomplete(input1);
  var autocomplete2 = new google.maps.places.Autocomplete(input2);
  place1 = autocomplete1.getPlace();
  place2 = autocomplete2.getPlace();
  //Meke map with initial position semarang city
  var latlag = {lat: -7.0051453, lng: 110.4381254};
  var map = new google.maps.Map(document.getElementById('map'),{
    center: latlag,
    zoom: 10,
    mapTypeControl: true,
    mapTypeControlOptions: {
      style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
      mapTypeIds: ['roadmap', 'terrain']
    }

  });
  directionsDisplay.setMap(map);
  var onChangeHandler = function() {
    calculateAndDisplayRoute(directionsService, directionsDisplay);
  };
  document.getElementById('dari').addEventListener('change', onChangeHandler);
  document.getElementById('ke').addEventListener('change', onChangeHandler);
}
function calculateAndDisplayRoute(directionsService, directionsDisplay) {
  directionsService.route({
    origin: document.getElementById('dari').value,
    destination: document.getElementById('ke').value,
    travelMode: 'DRIVING'
    },
    function(response, status) {
      if (status === 'OK') {
        directionsDisplay.setDirections(response);
      }
    });
}
