// Application module
var crudApp = angular.module('crudApp',[]);
crudApp.controller("DbController",['$scope','$http', function($scope,$http){

// Function to get Pump details from the database
getInfo();
function getInfo(){
// Sending request to PumpDetails.php files 
$http.post('databaseFiles/PumpDetails.php').success(function(data){
// Stored the returned data into scope 
$scope.details = data;
});
}

// Enabling show_form variable to enable Add Pump button
$scope.show_form = true;
// Function to add toggle behaviour to form
$scope.formToggle =function(){
$('#PumpForm').slideToggle();
$('#editPumpForm').css('display', 'none');
}
$scope.insertPump = function(info){
$http.post('databaseFiles/insertPump.php',{"PumpName":info.PumpName,"GPIO":info.GPIO}).success(function(data){
if (data == true) {
getInfo();
$('#PumpForm').css('display', 'none');
}
});
}
$scope.deletePumpInfo = function(info){
$http.post('databaseFiles/deletePump.php',{"del_id":info.PumpID}).success(function(data){
if (data == true) {
getInfo();
}
});
}
$scope.currentPump = {};
$scope.editPumpInfo = function(info){
$scope.currentPump = info;
$('#PumpForm').slideUp();
$('#editPumpForm').slideToggle();
}
$scope.UpdatePumpInfo = function(info){
$http.post('databaseFiles/updatePump.php',{"PumpID":info.PumpID,"PumpName":info.PumpName,"GPIO":info.GPIO}).success(function(data){
$scope.show_form = true;
if (data == true) {
getInfo();
}
});
}
$scope.updateMsg = function(PumpID){
$('#editPumpForm').css('display', 'none');
}
}]);