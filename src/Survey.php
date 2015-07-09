<?php

namespace Decipher\Api;

/**
 * Survey class file
 * 
 * PHP version 5.3
 * 
 * @category Survey
 * @package  DecipherApiPhpClient
 * @author   Tyler Souza <tsouza.sf@gmail.com>
 * @license  MIT 
 *           https://github.com/tysweezy/decipher-api-php-client/blob/master/LICENSE
 * @link     https://github.com/tysweezy/decipher-api-php-client/
 */ 
class Survey
{

    /**
     * Create a new Decipher Client instance
     * 
     * @param string $client 
     * 
     * Takes client param
     * 
     * @todo take in another param. $client collides with guzzle
     */
    public function __construct() 
    {
        //$this->client = $client;
    }

    /**
     * Friendly welcome
     *
     * @param string $phrase Phrase to return 
     *
     * @return string Returns the phrase passed in 
     */
    public function echoPhrase($phrase)
    {
        return $phrase;
    }

    public function getHttp() 
    {
        $client = new Client([
            'base_uri'  => 'http://support.focusvision.com/',
            'timeout'   => 2.0,
        ]);

        $response = $client->get('Decipher');

        print_r($response);
    }

}