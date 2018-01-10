<?php

namespace Carbon\Controllers;

class FoodController extends Controller {
	public function getFood($request, $response, $args) {
		$id = $args['id'];

		$query = new Query();
		$food = $query->table('foods')->where('id', '=', $id)->execute();
		return $response->withJson($food);
	}
	public function postCard($request, $response) {
		
	}
}