<?php

$app->group('/foods', function() {
	$this->get('/{id}', 'FoodController:getFoodById');
	$this->post('', 'FoodController:postFood');
});

$app->group('/search', function() {
	$this->get('/{name}', 'FoodController:searchFoodByName');

});