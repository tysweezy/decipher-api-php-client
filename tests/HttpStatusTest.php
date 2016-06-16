<?php

namespace Decipher\Api\Test;

class HttpStatusTest extends \PHPUnit_Framework_TestCase {

  /**
   * @test test curl request
   */
  public function testCurl()
  { 
    $url = 'https://v2.decipherinc.com/api';

    return $this->assertTrue($url);  
  }
}