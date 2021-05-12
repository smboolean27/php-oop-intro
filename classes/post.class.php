<?php

class Post {
	// attributi
	private $title;
	public $author;
	public $date;
	public $text;

	// costruttore
	public function __construct($_title, $_author, $_date, $_text)
	{
		//$this->title = $_title;
		$this->setTitle($_title);
		$this->author = $_author;
		$this->date = $_date;
		$this->text = $_text;
	}

	// metodi
	public function setTitle($_title) 
	{
		if ( !empty($_title) ) {
			$this->title = $_title;
		}
	}
	
	public function getTitle() 
	{
		return $this->title;
	}

	public function abstract($max = 40) 
	{
		$abstract = substr($this->text, 0, $max)."...";
		return $abstract;
	}
}