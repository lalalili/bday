angular.module('mainCtrl', [])


    .controller('myController', function ($scope, $http, $location, Wish) {

        //$scope.wishData = {from:$location.url().split('=')[1].split('&')[0],to:$location.url().split('&')[1].split('=')[1]};
        $scope.wishData = {};
        var to = $location.url().split('=')[1];

        $scope.loading = true;

        // GET ALL WISH ====================================================
//               Wish.get()
//                  .success(function(data) {
//                   $scope.wishes = data;
//                     $scope.loading = false;
//              });
        Wish.showto(to)
            .success(function (data) {
                $scope.wishes = data;
                $scope.loading = false;
            });
        // SAVE A WISH ======================================================
        $scope.submitWish = function () {
            $scope.loading = true;

            Wish.save($scope.wishes)
                .success(function (data) {

                    Wish.showto(to)
                        .success(function (showData) {
                            $scope.wishes = showData;
                            $scope.loading = false;
                        });

                })
                .error(function (data) {
                    console.log(data);
                });
        };

        // DELETE A WISH ====================================================
        $scope.deleteWish = function (id) {
            $scope.loading = true;

            Wish.destroy(id)
                .success(function (data) {

                    Wish.showto(to)
                        .success(function (getData) {
                            $scope.wishes = getData;
                            $scope.loading = false;
                        });

                });
        };

    })
    .controller('mainController', function ($scope, $http, $location, Wish) {

        //$scope.wishData = {from:$location.url().split('=')[1].split('&')[0],to:$location.url().split('&')[1].split('=')[1]};
        //var from = $location.url().split('=')[1].split('&')[0]
        $scope.toData = {};
        $scope.wishData = {from: $location.url().split('=')[1]};
        var from = $location.url().split('=')[1];
        $scope.loading = true;
        $scope.change = function () {
            $scope.wishData = {from: $location.url().split('=')[1], to: $scope.toData.to}
        };

        // GET ALL WISH ====================================================
        Wish.getbday()
            .success(function (data) {
                $scope.bdays = data;
                $scope.loading = false;
            });
        Wish.showfrom(from)
            .success(function (data) {
                $scope.wishes = data;
                $scope.loading = false;
            });
        // SAVE A WISH ======================================================
        $scope.submitWish = function () {
            $scope.loading = true;
            Wish.save($scope.wishData)
                .success(function (data) {

                    Wish.showfrom(from)
                        .success(function (showData) {
                            $scope.wishes = showData;
                            $scope.loading = false;
                        });

                })
                .error(function (data) {
                    console.log(data);
                });
        };

        // DELETE A WISH ====================================================
        $scope.deleteWish = function (id) {
            $scope.loading = true;

            Wish.destroy(id)
                .success(function (data) {

                    Wish.showfrom(from)
                        .success(function (getData) {
                            $location.url('f=' + from);
                            $scope.wishes = getData;
                            $location.url('f=' + from);
                            $scope.loading = false;
                        });

                });
        };

    });