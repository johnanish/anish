<?php


class KittenModel {

	private $kittens = array();

	public function __construct() {

		$this->kittens = array (
			'snuffles', 'meuw', 'pickles', 'tickles'
		);
	}

	public function get( $id ) {
		if( isset( $this->kittens[$id-1] ) ) {
			return $this->kittens[$id-1];
		} else {
			throw new Exception( 'This kitten doesnt exist... yet...' );
		}
	}

	public function add( $kitten ) {
		$this->kittens[] = $kitten;	
	}

	public function getAll() {
		return $this->kittens;
	}


}