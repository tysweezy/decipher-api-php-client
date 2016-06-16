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
     * Api key. Set to public for now. So it can be accessed
     * outside this class.
     * @var $key
     */
    public $key;

    /**
     * Create a new Decipher Client instance
     * 
     * @param string $client 
     * 
     * Takes client param
     * 
     * @todo take in another param. $client collides with guzzle
     * @todo integrate x-apikey header. 
     */
    public function __construct($key) 
    {
        $this->key = $key;
    }



    protected function curl()
    {
        // all the curl stuff

    } 

    /**
     * Friendly welcome
     *
     * @param string $phrase Phrase to return 
     *
     * @return string Returns the phrase passed in 
     */
   /* public function echoPhrase($phrase)
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
    }*/

}