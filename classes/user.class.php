<?php

class User {

	// attributi
	public $name;
	public $lastname;
	public $email;
	public $phone;

	// costruttore
	public function __construct($_name, $_lastname, $_email, $_phone = NULL)
	{
		$this->name = $_name;
		$this->lastname = $_lastname;
		$this->email = $_email;
		$this->phone = $_phone;
	}

	// metodi	

	/**
	 * getFullName
	 *
	 * Restituisce il nome completo
	 * @return string
	 */
	public function getFullName():string
	{
		return $this->name . " " . $this->lastname;
	}

}