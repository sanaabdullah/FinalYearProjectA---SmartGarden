// Application module
var crudApp = angular.module('crudApp',[]);
crudApp.controller("DbController",['$scope','$http', function($scope,$http){

// Function to get Light details from the database
getInfo();
function getInfo(){
// Sending request to LightDetails.php files 
$http.post('databaseFiles/LightDetails.php').success(function(data){
// Stored the returned data into scope 
$scope.details = data;
});
}

// Enabling show_form variable to enable Add Light button
$scope.show_form = true;
// Function to add toggle behaviour to form
$scope.formToggle =function(){
$('#LightForm').slideToggle();
$('#editLightForm').css('display', 'none');
}
$scope.insertLight = function(info){
$http.post('databaseFiles/insertLight.php',{"LightName":info.LightName,"GPIO":info.GPIO}).success(function(data){
if (data == true) {
getInfo();
$('#LightForm').css('display', 'none');
}
});
}
$scope.deleteLightInfo = function(info){
$http.post('databaseFiles/deleteLight.php',{"del_id":info.LightID}).success(function(data){
if (data == true) {
getInfo();
}
});
}
$scope.currentLight = {};
$scope.editLightInfo = function(info){
$scope.currentLight = info;
$('#LightForm').slideUp();
$('#editLightForm').slideToggle();
}
$scope.UpdateLightInfo = function(info){
$http.post('databaseFiles/updateLight.php',{"LightID":info.LightID,"LightName":info.LightName,"GPIO":info.GPIO}).success(function(data){
$scope.show_form = true;
if (data == true) {
getInfo();
}
});
}
$scope.updateMsg = function(LightID){
$('#editLightForm').css('display', 'none');
}
}]);