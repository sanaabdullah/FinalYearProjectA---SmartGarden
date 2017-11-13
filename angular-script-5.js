// Application module
var crudApp = angular.module('crudApp',[]);
crudApp.controller("DbController",['$scope','$http', function($scope,$http){

// Function to get Fan details from the database
getInfo();
function getInfo(){
// Sending request to FanDetails.php files 
$http.post('databaseFiles/FanDetails.php').success(function(data){
// Stored the returned data into scope 
$scope.details = data;
});
}

// Enabling show_form variable to enable Add Fan button
$scope.show_form = true;
// Function to add toggle behaviour to form
$scope.formToggle =function(){
$('#FanForm').slideToggle();
$('#editFanForm').css('display', 'none');
}
$scope.insertFan = function(info){
$http.post('databaseFiles/insertFan.php',{"FanName":info.FanName,"GPIO":info.GPIO}).success(function(data){
if (data == true) {
getInfo();
$('#FanForm').css('display', 'none');
}
});
}
$scope.deleteFanInfo = function(info){
$http.post('databaseFiles/deleteFan.php',{"del_id":info.FanID}).success(function(data){
if (data == true) {
getInfo();
}
});
}
$scope.currentFan = {};
$scope.editFanInfo = function(info){
$scope.currentFan = info;
$('#FanForm').slideUp();
$('#editFanForm').slideToggle();
}
$scope.UpdateFanInfo = function(info){
$http.post('databaseFiles/updateFan.php',{"FanID":info.FanID,"FanName":info.FanName,"GPIO":info.GPIO}).success(function(data){
$scope.show_form = true;
if (data == true) {
getInfo();
}
});
}
$scope.updateMsg = function(FanID){
$('#editFanForm').css('display', 'none');
}
}]);