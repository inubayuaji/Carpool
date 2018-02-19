//make toggle
function toggleNotif(){
  document.getElementById('notif-list').classList.toggle('show');
}
function toggleUser(){
  document.getElementById('user-list').classList.toggle('show');
}
//Make datepicker
var d1 = datepicker('#berangkat');
var d2 = datepicker('#pulang');
//Inital Map
/*function initMap(){
  //Make autocomplete
  var input1 = document.getElementById('dari');
  var input2 = document.getElementById('ke');
  var autocomplete1 = new google.maps.places.Autocomplete(input1);
  var autocomplete2 = new google.maps.places.Autocomplete(input2);
  //Meke map with initial position semarang city
  var latlag = {lat: -7.0051453, lng: 110.4381254};
  var map = new google.maps.Map(document.getElementById('map'),{
    center: latlag,
    zoom: 10
  });
}*/
