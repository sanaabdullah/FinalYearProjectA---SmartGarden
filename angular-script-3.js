// Application module
var crudApp = angular.module('crudApp',[]);
crudApp.controller("DbController",['$scope','$http', function($scope,$http){

// Function to get Moist details from the database
getInfo();
function getInfo(){
// Sending request to MoistDetails.php files 
$http.post('databaseFiles/MoistDetails.php').success(function(data){
// Stored the returned data into scope 
$scope.details = data;
});
}

// Enabling show_form variable to enable Add Moist button
$scope.show_form = true;
// Function to add toggle behaviour to form
$scope.formToggle =function(){
$('#MoistForm').slideToggle();
$('#editMoistForm').css('display', 'none');
}
$scope.insertMoist = function(info){
$http.post('databaseFiles/insertMoist.php',{"MoistName":info.MoistName,"Channel":info.Channel}).success(function(data){
if (data == true) {
getInfo();
$('#MoistForm').css('display', 'none');
}
});
}
$scope.deleteMoistInfo = function(info){
$http.post('databaseFiles/deleteMoist.php',{"del_id":info.MoistID}).success(function(data){
if (data == true) {
getInfo();
}
});
}
$scope.currentMoist = {};
$scope.editMoistInfo = function(info){
$scope.currentMoist = info;
$('#MoistForm').slideUp();
$('#editMoistForm').slideToggle();
}
$scope.UpdateMoistInfo = function(info){
$http.post('databaseFiles/updateMoist.php',{"MoistID":info.MoistID,"MoistName":info.MoistName,"Channel":info.Channel}).success(function(data){
$scope.show_form = true;
if (data == true) {
getInfo();
}
});
}
$scope.updateMsg = function(MoistID){
$('#editMoistForm').css('display', 'none');
}
}]);