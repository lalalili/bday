angular.module('wishService', [])

    .factory('Wish', function($http) {

        return {
            get : function() {
                return $http.get('/api/wishes');
            },
            showto : function(to) {
                return $http.get('/api/wishes/' + to);
            },
            showfrom : function(from) {
                return $http.get('/api/mywishes/' + from);
            },
            getbday : function() {
                return $http.get('/api/bdays');
            },
            save : function(wishData) {
                return $http({
                    method: 'POST',
                    url: '/api/wishes',
                    headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
                    data: $.param(wishData)
                });
            },
            destroy : function(id) {
                return $http.delete('/api/wishes/' + id);
            }
        }
    });