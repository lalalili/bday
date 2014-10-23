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
    <!--[if lte IE 8]>
    <script type="text/javascript">
        alert(" 系統不支援您的瀏覽器，請改用 IE9.0 (含)以上版本，或 Firefox , Chrome");
    </script>
    <![endif]-->

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
        <h3><small>Wish from : <span ng-bind="wish.from"></span> ~ <span ng-bind="wish.created_at"></span></h3>
        <p><h3><span ng-bind="wish.message">Loading ...</span></h3></p>
        <!-- <p><a href="#" ng-click="deleteWish(wish.id)" class="text-muted">Delete</a></p>-->
    </div>

</div>
</body>
</html>