var myApp = angular.module("myApp", []);

myApp.controller("mainCtrl", function ($scope, $filter) {
	$scope.friends = [
		{
			id: 0,
			name: "AC",
		},
		{
			id: 1,
			name: "Balkon atau teras",
		},
		{
			id: 2,
			name: "WiFi Gratis",
		},
	];

	$scope.selection = [];

	$scope.selectFriends = function (name) {
		var idx = $scope.selection.indexOf(name);

		// is currently selected
		if (idx > -1) {
			$scope.selection.splice(idx, 1);
		}
		// is newly selected
		else {
			$scope.selection.push(name);
		}
	};

	$scope.deselectFriend = function (name) {
		var idx = $scope.selection.indexOf(name);

		// is currently selected
		if (idx > -1) {
			$scope.selection.splice(idx, 1);
		}
	};
});
