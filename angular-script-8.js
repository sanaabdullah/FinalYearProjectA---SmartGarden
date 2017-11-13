// Application module
var crudApp = angular.module('crudApp',[]);
crudApp.controller("DbController",['$scope','$http', function($scope,$http){

// Function to get Water details from the database
getInfo();
function getInfo(){
// Sending request to WaterDetails.php files 
$http.post('databaseFiles/WaterDetails.php').success(function(data){
// Stored the returned data into scope 
$scope.details = data;
});
}

// Enabling show_form variable to enable Add Water button
$scope.show_form = true;
// Function to add toggle behaviour to form
$scope.formToggle =function(){
$('#WaterForm').slideToggle();
$('#editWaterForm').css('display', 'none');
}
$scope.insertWater = function(info){
$http.post('databaseFiles/insertWater.php',{"WaterName":info.WaterName,"GPIO":info.GPIO,"Channel":info.Channel}).success(function(data){
if (data == true) {
getInfo();
$('#WaterForm').css('display', 'none');
}
});
}
$scope.deleteWaterInfo = function(info){
$http.post('databaseFiles/deleteWater.php',{"del_id":info.WaterID}).success(function(data){
if (data == true) {
getInfo();
}
});
}
$scope.currentWater = {};
$scope.editWaterInfo = function(info){
$scope.currentWater = info;
$('#WaterForm').slideUp();
$('#editWaterForm').slideToggle();
}
$scope.UpdateWaterInfo = function(info){
$http.post('databaseFiles/updateWater.php',{"WaterID":info.WaterID,"WaterName":info.WaterName,"GPIO":info.GPIO,"Channel":info.Channel}).success(function(data){
$scope.show_form = true;
if (data == true) {
getInfo();
}
});
}
$scope.updateMsg = function(WaterID){
$('#editWaterForm').css('display', 'none');
}
}]);