<?php


class AnishController extends WebController {

	public function __construct() {}

	public function kittensAction() {

		$kitten = new KittenModel();

		if( !empty( $_POST['kittenName'] ) ) {

			$kitten->add( $_POST['kittenName']  );
			echo "OK!";

		} else {
			
			$kittenId = (empty($_GET['id'])) ? null : $_GET['id'];
			
			if( !empty( $kittenId ) ) {
				// show one kitten
				$item = $kitten->get( $kittenId );
			} else {
				// list all kittens
				$item = $kitten->getAll();
			}

			var_dump( $item );

		}
	}

	public function spacemanAction() {
		echo "I love sublime";
	}

}