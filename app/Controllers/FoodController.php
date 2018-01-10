<?php

namespace Carbon\Controllers;

class FoodController extends Controller {
	public function getFoodById($request, $response, $args) {
		$id = $args['id'];

		$query = new Query();
		$food = $query->table('foods')->where('id', '=', $id)->execute();
		return $response->withJson($food);
	}
	public function searchFoodByName($request, $response, $args) {
		$name = $args['name'];
		$query = new Query();
		$foods = $query->table('foods')->search('name', urlencode('chicken breast'))->execute();

		return $response->withJson($foods);
	}
	public function postFood($request, $response, $args) {
		
	}
}