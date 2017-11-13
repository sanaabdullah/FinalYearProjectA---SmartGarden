// Application module
var crudApp = angular.module('crudApp',[]);
crudApp.controller("DbController",['$scope','$http', function($scope,$http){

// Function to get Valve details from the database
getInfo();
function getInfo(){
// Sending request to ValveDetails.php files 
$http.post('databaseFiles/ValveDetails.php').success(function(data){
// Stored the returned data into scope 
$scope.details = data;
});
}

// Enabling show_form variable to enable Add Valve button
$scope.show_form = true;
// Function to add toggle behaviour to form
$scope.formToggle =function(){
$('#ValveForm').slideToggle();
$('#editValveForm').css('display', 'none');
}
$scope.insertValve = function(info){
$http.post('databaseFiles/insertValve.php',{"ValveName":info.ValveName,"GPIO":info.GPIO}).success(function(data){
if (data == true) {
getInfo();
$('#ValveForm').css('display', 'none');
}
});
}
$scope.deleteValveInfo = function(info){
$http.post('databaseFiles/deleteValve.php',{"del_id":info.ValveID}).success(function(data){
if (data == true) {
getInfo();
}
});
}
$scope.currentValve = {};
$scope.editValveInfo = function(info){
$scope.currentValve = info;
$('#ValveForm').slideUp();
$('#editValveForm').slideToggle();
}
$scope.UpdateValveInfo = function(info){
$http.post('databaseFiles/updateValve.php',{"ValveID":info.ValveID,"ValveName":info.ValveName,"GPIO":info.GPIO}).success(function(data){
$scope.show_form = true;
if (data == true) {
getInfo();
}
});
}
$scope.updateMsg = function(ValveID){
$('#editValveForm').css('display', 'none');
}
}]);