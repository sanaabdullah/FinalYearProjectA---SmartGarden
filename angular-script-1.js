// Application module
var crudApp = angular.module('crudApp',[]);
crudApp.controller("DbController",['$scope','$http', function($scope,$http){

// Function to get temperature details from the database
getInfo();
function getInfo(){
// Sending request to TempDetails.php files 
$http.post('databaseFiles/TempDetails.php').success(function(data){
// Stored the returned data into scope 
$scope.details = data;
});
}

// Enabling show_form variable to enable Add temperature button
$scope.show_form = true;
// Function to add toggle behaviour to form
$scope.formToggle =function(){
$('#TempForm').slideToggle();
$('#editTempForm').css('display', 'none');
}
$scope.insertTemp = function(info){
$http.post('databaseFiles/insertTemp.php',{"TempName":info.TempName,"GPIO":info.GPIO}).success(function(data){
if (data == true) {
getInfo();
$('#TempForm').css('display', 'none');
}
});
}
$scope.deleteTempInfo = function(info){
$http.post('databaseFiles/deleteTemp.php',{"del_id":info.TempID}).success(function(data){
if (data == true) {
getInfo();
}
});
}
$scope.currentTemp = {};
$scope.editTempInfo = function(info){
$scope.currentTemp = info;
$('#TempForm').slideUp();
$('#editTempForm').slideToggle();
}
$scope.UpdateTempInfo = function(info){
$http.post('databaseFiles/updateTemp.php',{"TempID":info.TempID,"TempName":info.TempName,"GPIO":info.GPIO}).success(function(data){
$scope.show_form = true;
if (data == true) {
getInfo();
}
});
}
$scope.updateMsg = function(TempID){
$('#editTempForm').css('display', 'none');
}
}]);