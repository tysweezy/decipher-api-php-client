<?php

namespace Decipher\Api;

/**
 * Client class file | Base class
 * 
 * PHP version 5.3
 * 
 * NOTE: THIS CLASS WILL (MOST LIKELY) NOT BE USED.
 * 
 * @category Client
 * @package  DecipherApiPhpClient
 * @author   Tyler Souza <tsouza.sf@gmail.com>
 * @license  MIT 
 *           https://github.com/tysweezy/decipher-api-php-client/blob/master/LICENSE
 * @link     https://github.com/tysweezy/decipher-api-php-client/
 */ 

class Client {

	/**
	 * @var string
	*/
	protected $host;

	/**
	 * @var string
	*/
	protected $email;

	/**
	 * @var string
	*/
	protected $scheme;

	/**
	 * @var string
	*/
	protected $password;

	/**
	 * @var string
	*/
	protected $token;

	/**
	 * @var string
	*/
	protected $key;

	/**
	 * @var string
	*/
	protected $endpoint;

	/**
	 * @var string
	*/
	protected $apiVer = 'v1';


	/**
	 * @param $endpoint
	 * @param $email
	*/
	public function __construct($endpoint, $email, $scheme = 'https', $host = 'v2.decipherinc.com/api/')
	{
		$this->endpoint = $endpoint;
		$this->email = $email;
		$this->host = $host;
		$this->scheme = $scheme;

		// @todo: add logic to add in api version.
		// if url -- take to endpoint. else throw exception.

		// @todo: add in necessary subclasses for instantiation.
	}

	/**
	 * get endpoint 
	 * 
	 *  
	 */

	public function endpoint($path)
	{
		// check if endpoint returns anything
	}

	/**
	 * @param $value
	*/
	public function setKey($value)
	{
	  return $this->key = $value;
	}

}