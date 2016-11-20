<?php

/**
 * Created by PhpStorm.
 * User: olenagi
 * Date: 04.11.16
 * Time: 14:31
 */

use \PHPUnit\Framework\TestCase;
use CurlWrap\Curl;


class CurlTest extends TestCase
{
    public function testSendFile()
    {
        $curl = new Curl('http://check.loc');
        $curl->setOpt(CURLOPT_RETURNTRANSFER, true);
        $curl->setFile(__DIR__.'/files/file.txt');
        $result = $curl->post([], 'http://example.com');
        print_r($result);
        $this->assertTrue((bool) $result);
    }
}