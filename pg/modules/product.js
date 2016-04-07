(function(){

	var app = angular.module('store-products', []);

		app.directive('productTitle',function(){
			return {
				restrict:'E',
				templateUrl: '/pg/gem/product-title'
			};
		});

		app.directive('productPanels',function(){
			return {
				restrict: 'E',
				templateUrl:'/pg/gem/product-panels',
				controller:function($scope){
					this.tab = 1;
					this.selectTab = function(setTab){
						this.tab = setTab;
					};
					this.isSelected = function(checkTab){
						return this.tab == checkTab;
					}
				},
				controllerAs:'panel'
			};
		});

		app.controller('ReviewController',['$scope',function($scope){
			this.review = {};

			this.addReview = function(product){
				// console.log(this.review,product);
				product.reviews.push(this.review);
				this.review = {};
				$scope.reviewForm.$setPristine(true);
			}
		}]);

})();

	