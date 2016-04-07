<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<script src="/js/jquery-1.8.3.min.js"></script>
	<script src="/js/angular.min.js"></script>
	<script src="/js/base.js"></script>
	<link href="/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="/css/main.css" rel="stylesheet" type="text/css">
	<link rel="Shortcut Icon" type="image/x-icon" href="http://soshyboy.web.fc2.com/banana.ico">
	<script src="/js/modules/app.js"></script>
	<script src="/js/modules/product.js"></script>

	<title>三分間待ってやる。</title>

	<style type="text/css">
	img{width: 100px;}
	.ng-invalid.ng-dirty{
		border-color: red;
	}
	.ng-valid.ng-dirty{
		border-color: green;
	}
	</style>

</head>
<body>

<div class='wrapper' ng-app="store">
	<div ng-controller="StoreController as store">
		<ul class="list-group">
			<li class="list-group-item"ng-repeat="product in store.products | orderBy:'-price'" ng-hide="product.soldOut">
				<product-title></product-title>
				<product-panels></product-panels>
			</li>
		</ul>
	</div>

</div>
