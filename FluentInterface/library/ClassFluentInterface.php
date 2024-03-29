<?php

/*
 * @package         <packagename>
 * @author          <authorname> 
 * @copyright       Copyright (C) <year> <copyright>
 * @license         <licensetype>. See license.txt
 * @version         <version>
 * 
 * @see https://github.com/fititnt/php-design-pattern
 */

class ClassFluentInterface {

	/**
	 * Generic mixed variable description
	 * 
	 * @var Mixed
	 */
	private $variable;

	/**
	 * Generic mixed variable description
	 * 
	 * @var Mixed
	 */
	public $public;

	/**
	 * @var Integer Generic integer variable description
	 */
	private $integer;

	/**
	 * Generic string variable description
	 * 
	 * @var String
	 */
	private $string;

	/**
	 * Generic array variable description
	 * 
	 * @var Array
	 */
	private $array;

	/**
	 * Initialize values
	 */
	public function __construct() {
		$this->public = '__construct() started value of $public var';
	}

	/**
	 * Close execution 
	 */
	public function __destruct() {
		print "\nClassFluentInterface called __destruct()\n";
	}

	/**
	 * Function to debug $this object
	 *
	 * @param String $method: print_r or, var_dump
	 * @param boolean $format: true for print <pre> tags. Default false
	 * @return void
	 */
	public function debug($method = 'print_r', $format = FALSE) {
		if ($format) {
			echo '<pre>';
		}
		if ($method === 'print_r') {
			print_r($this);
		} else {
			var_dump($this);
		}
		if ($format) {
			echo '</pre>';
		}
	}

	/**
	 * Delete (set to NULL) generic variable
	 * 
	 * @param String $name: name of var do delete
	 * @return Object $this
	 */
	public function del($name) {
		$this->$name = NULL;
		return $this;
	}

	/**
	 * Example of private method. Its a good pratice start with _ (undescore)
	 *
	 * @param <vartype> <vardescription>
	 * @return <returntype> <returndescription>
	 */
	private function doPrivateMethod($variable) {
		$result = '_doPrivateMethod for a ';
		$result .= $variable;
		return $result;
	}

	/**
	 * Example of private method.
	 * Will call one private method
	 *
	 * @param <vartype> <vardescription>
	 * @return <returntype> <returndescription>
	 */
	public function doPublicMethod($variable) {
		$result = 'doPublicMethod is asking ...';
		$result .= $this->doPrivateMethod($variable);
		return $result;
	}

	/**
	 * Return generic variable
	 * 
	 * @param String $name: name of var to return
	 * @return Mixed this->$name: value of var
	 */
	public function get($name) {
		return $this->$name;
	}

	/**
	 * Set one generic variable the desired value
	 * 
	 * @param String $name: name of var to set value
	 * @param Mixed $value: value to set to desired variable
	 * @return Object $this
	 */
	public function set($name, $value) {
		$this->$name = $value;
		return $this;
	}

	/**
	 * Set to <variable> the desired value
	 * 
	 * @param Mixed $value: name of var to set
	 * @return Object $this
	 */
	public function setVariable($value) {
		$this->variable = $value;
		return $this;
	}

	/**
	 * Get $variable desired value
	 * 
	 * @param Mixed $name: name of var to return
	 * @return Oject $this->$variable
	 */
	public function getVariable() {
		return $this->variable;
	}

}
