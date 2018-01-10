<?php

namespace Carbon\Controllers;

class FoodController extends Controller {
	public function getFoodById($request, $response, $args) {
		$id = $args['id'];

		$query = new Query();
		$food = $query->table('foods')->where('id', '=', $id)->execute();
		return $response->withJson($food, 200, JSON_PRETTY_PRINT);
	}
	public function searchFoodByName($request, $response, $args) {
		$name = $args['name'];
		$query = new Query();
		$foods = $query->table('foods')->search('name', $name)->execute();

		return $response->withJson($foods, 200, JSON_PRETTY_PRINT);
	}
	public function postFood($request, $response) {
		$data = $request->getParsedBody();

		if (count($data) != 7) {
			echo "400 error: Please ensure all necessary variables are defined";
			return $response->withStatus(400);
		}

		$query = new Query();
		$result = $query->table('foods')
						->insert(array('name', 'serving_unit', 'serving_value', 'calories', 'fat', 'carbohydrate', 'protein'),
								 array($data['name'], $data['serving_unit'], $data['serving_value'], $data['calories'], $data['fat'], $data['carbohydrate'], $data['protein']))
						->execute();
		if ($result) {
			echo "200: New food created successfully";
			return $response->withStatus(200);
		}

	}
}