// Application module
var crudApp = angular.module('crudApp',[]);
crudApp.controller("DbController",['$scope','$http', function($scope,$http){

// Function to get LDR details from the database
getInfo();
function getInfo(){
// Sending request to LDRDetails.php files 
$http.post('databaseFiles/LDRDetails.php').success(function(data){
// Stored the returned data into scope 
$scope.details = data;
});
}

// Enabling show_form variable to enable Add LDR button
$scope.show_form = true;
// Function to add toggle behaviour to form
$scope.formToggle =function(){
$('#LDRForm').slideToggle();
$('#editLDRForm').css('display', 'none');
}
$scope.insertLDR = function(info){
$http.post('databaseFiles/insertLDR.php',{"LDRName":info.LDRName,"Channel":info.Channel}).success(function(data){
if (data == true) {
getInfo();
$('#LDRForm').css('display', 'none');
}
});
}
$scope.deleteLDRInfo = function(info){
$http.post('databaseFiles/deleteLDR.php',{"del_id":info.LDRID}).success(function(data){
if (data == true) {
getInfo();
}
});
}
$scope.currentLDR = {};
$scope.editLDRInfo = function(info){
$scope.currentLDR = info;
$('#LDRForm').slideUp();
$('#editLDRForm').slideToggle();
}
$scope.UpdateLDRInfo = function(info){
$http.post('databaseFiles/updateLDR.php',{"LDRID":info.LDRID,"LDRName":info.LDRName,"Channel":info.Channel}).success(function(data){
$scope.show_form = true;
if (data == true) {
getInfo();
}
});
}
$scope.updateMsg = function(LDRID){
$('#editLDRForm').css('display', 'none');
}
}]);