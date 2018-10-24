angular.module('myApp', ['ionic'])

.controller('AppController', function($scope, $interval, $ionicSlideBoxDelegate) {

    var maxSlides = 5;
    var slideCounter = 2;

    $scope.data = {};
    $scope.data.slides = [
        {
            title : "Profil",
            data  : "Slide 1 Content"
        },
        {
            title : "Profil2",
            data  : "Slide 2 Content"
        }
    ];

    $ionicSlideBoxDelegate.update();



    var intervalId = $interval( function() {


        if( slideCounter < maxSlides) {

            slideCounter++;
            console.log('Adding a slide');
            $scope.data.slides.push( {
                title : "Slide " + slideCounter,
                data : "Slide " + slideCounter + ' Content'
            });

            $ionicSlideBoxDelegate.update();
        } else {
            console.log('All full!');
            $interval.cancel(intervalId);
        }
    }, 3000);

});