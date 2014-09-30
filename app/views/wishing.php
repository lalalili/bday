<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Happy Birthday</title>

    <!-- CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css"> <!-- load bootstrap via cdn -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css"> <!-- load fontawesome -->
    <style>
        body         { padding-top:30px; }
        form         { padding-bottom:20px; }
        .comment     { padding-bottom:20px; }
    </style>

    <!-- JS -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular.min.js"></script> <!-- load angular -->

    <!-- ANGULAR -->
    <!-- all angular resources will be loaded from the /public folder -->
    <script src="js/controllers/mainCtrl.js"></script> <!-- load our controller -->
    <script src="js/services/wishService.js"></script> <!-- load our service -->
    <script src="js/app.js"></script> <!-- load our application -->

</head>
<!-- declare our angular app and controller -->
<body class="container" ng-app="wishApp" ng-controller="myController">
<div class="col-md-8 col-md-offset-2">

    <!-- PAGE TITLE -->
    <div class="page-header">
        <h2>Happy Birthday !!</h2>
        <h4>Best Wishes From MIGOs</h4>
    </div>

    <!-- LOADING ICON -->
    <!-- show loading icon if the loading variable is set to true -->
    <p class="text-center" ng-show="loading"><span class="fa fa-meh-o fa-5x fa-spin"></span></p>

    <!-- Wishes -->
    <!-- hide these wishes if the loading variable is true -->
    <div class="comment" ng-hide="loading" ng-repeat="wish in wishes">
        <h3><small>Wish from : {{ wish.from }} ~ {{ wish.created_at }}</h3>
        <p><h3>{{ wish.message }}</h3></p>
        <!-- <p><a href="#" ng-click="deleteWish(wish.id)" class="text-muted">Delete</a></p>-->
    </div>

</div>
</body>
</html>