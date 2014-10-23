<!doctype html>

<html lang="en" ng-app="wishApp" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="UTF-8">
    <title>Wish Wall</title>
    <!-- CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css"> <!-- load bootstrap via cdn -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css"> <!-- load fontawesome -->
    <!-- load fontawesome -->
    <style>
        body {
            padding-top: 30px;
        }

        form {
            padding-bottom: 20px;
        }

        .comment {
            padding-bottom: 20px;
        }
    </style>

    <!-- JS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/angular.min.js"></script>
    <!-- load angular -->

    <!-- ANGULAR -->
    <!-- all angular resources will be loaded from the /public folder -->
    <script src="js/controllers/mainCtrl.js"></script>
    <!-- load our controller -->
    <script src="js/services/wishService.js"></script>
    <!-- load our service -->
    <script src="js/app.js"></script>
    <!-- load our application -->
    <!--[if lte IE 8]>
    <script type="text/javascript">
            alert("系統不支援您的瀏覽器，請改用 IE9.0 (含)以上版本，或 Firefox , Chrome");
    </script>
    <![endif]-->

</head>
<!-- declare our angular app and controller -->
<body ng-app="wishApp" ng-controller="mainController">
<div class="col-md-8 col-md-offset-2">

    <!-- PAGE TITLE -->
    <div class="page-header">
        <h2>Send Your Best Wishes :)</h2>
    </div>

    <!-- NEW COMMENT FORM -->
    <form ng-submit="submitWish()"> <!-- ng-submit will disable the default form action and use our function -->

        <!-- From -->
        <div class="form-group">
            <h3>
                <small>From : <span ng-bind="wishData.from"></span></small>
            </h3>
        </div>


        <!-- To -->
        <div class="form-group">
            <h3>
                <small>To :
                    <select ng-model="toData" ng-options="m.to for m in bdays" ng-change="change()" required>
                        <option value="">-- Wishes To --</option>
                    </select></small>
            </h3>
        </div>
        <!--        <pre>-->
        <!--        wishData:-->
        <!--        {{wishData}}-->
        <!--        </pre>-->
        <!--        <pre>-->
        <!--        wishes:-->
        <!--        {{wishes}}-->
        <!--        </pre>-->
        <!--        <pre>-->
        <!--        bdays:-->
        <!--        {{bdays}}-->
        <!--        </pre>-->
        <!--        <pre>-->
        <!--        to.name:-->
        <!--        {{to.name}}-->
        <!--        </pre>-->
        <!-- message -->
        <div class="form-group">
            <h3>
                <small>Wishes：</small>
            </h3>
            <input type="text" class="form-control input-lg" name="message" ng-model="wishData.message"
                   placeholder="Wishes ..." required>
        </div>

        <!-- SUBMIT BUTTON -->
        <div class="form-group text-right">
            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
        </div>
    </form>

    <!--Preview
          <pre>
            {{ wishData.from }}
            {{ wishData.to }}
            {{ wishData }}
           </pre>
         -->

    <!-- LOADING ICON -->
    <!-- show loading icon if the loading variable is set to true -->
    <p class="text-center" ng-show="loading"><span class="fa fa-meh-o fa-5x fa-spin"></span></p>

    <!-- Wishes -->
    <!-- hide these wishes if the loading variable is true -->
    <div class="page-header">
        <h4>History</h4>
    </div>
    <div class="comment" ng-hide="loading" ng-repeat="wish in wishes">
        <h3>
            <small>Wish to : <span ng-bind="wish.to"></span> ~ <span ng-bind="wish.created_at"></span>
        </h3>
        <p><h4><span ng-bind="wish.message" >  Loading ...</span></h4></p>
        <p><a href="#" ng-click="deleteWish(wish.id)" class="text-muted">Delete</a></p>
    </div>

</div>
</body>
</html>