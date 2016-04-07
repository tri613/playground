<section>
	<ul class="nav nav-pills">
		<li ng-class="{active:panel.isSelected(1)}"> <a href ng-click="panel.selectTab(1)">Description</a> </li>
		<li ng-class="{active:panel.isSelected(2)}"> <a href ng-click="panel.selectTab(2)">Specifications</a> </li>
		<li ng-class="{active:panel.isSelected(3)}"> <a href ng-click="panel.selectTab(3)">Reviews</a> </li>
	</ul>
	<div class="panel" ng-show="panel.isSelected(1)">
		<h4>Description</h4>
		<p>{{product.description}}</p>
	</div>

	<div class="panel" ng-show="panel.isSelected(2)">
		<h4>Specifications</h4>
		<blockquote>not yet</blockquote>
	</div>

	<div class="panel" ng-show="panel.isSelected(3)">
		<h4> Reviews </h4>
		<blockquote ng-repeat="review in product.reviews">
			<b>Stars: {{review.stars}}</b>
			{{review.body}}
			<cite>by: {{review.author}}</cite>
		</blockquote>

		<!-- form -->
		<form name="reviewForm" novalidate accept-charset="utf-8" ng-controller="ReviewController as reviewCtrl" ng-submit="reviewForm.$valid && reviewCtrl.addReview(product)">
			<!-- live preview -->
			<blockquote ng-show="reviewCtrl.review.stars">
				<b>Stars: {{reviewCtrl.review.stars}}</b>
				{{reviewCtrl.review.body}}
				<cite>by: {{reviewCtrl.review.author}}</cite>
			</blockquote>


		  	<div class="form-group">
				<select class="form-control" name="stars" ng-model="reviewCtrl.review.stars" required>
					<option value="1">1 star</option>
					<option value="2">2 stars</option>
					<option value="3">3 stars</option>
					<option value="4">4 stars</option>
					<option value="5">5 stars</option>
				</select>
			</div>
		  	<div class="form-group">
				<textarea class="form-control" ng-model="reviewCtrl.review.body" placeholder="Write a short review of the product" required></textarea>
			</div>

			<div class="form-group">
				<input class="form-control"  type="email" name="email" ng-model="reviewCtrl.review.author" placeholder="email" required>
			</div>

			<div> review form is {{reviewForm.$valid}} </div>

			<button type="submit" class="btn">Submit</button>
		</form>
	</div>
</section>