/**
 * Created by medna on 01/05/2017.
 */
app.controller('registerController',['$scope','$http','$state',function ($scope,$http,$state) {
    $scope.user={};
    $scope.loadingForm=false;
    var success = function (response) {
        var valid = response.data.valid;
        if (valid) {
            $state.go('home');
        } else {
            $scope.errors=response.data.errors;

        }
        $scope.loadingForm=false;
    };

    var error = function (reason) {
        console.log("Submission failed");
        $scope.loadingForm=false;
    };

    $scope.submit = function () {
        $scope.loadingForm=true;
        var formData = {
            fos_user_registration_form: $scope.user
        };

        $http.post(Routing.generate('user_register'), $.param(formData), {
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        }).then(success, error);
    };
}]);