<?php

namespace Carbon\Controllers;

class FoodController extends Controller {
	public function getFood($request, $response, $args) {
		$id = $args['id'];
		//$cards = $query->table('cards')->where('topic_id', '=', $id)->execute();

		$test = array("hi" => "bye");
		return $response->withJson($test);
	}
	public function postCard($request, $response) {
		
	}
}