<?php

$app->group('/foods', function() {
	$this->get('/{id}', 'FoodController:getFood');
});