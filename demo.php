<?php
/**
 * Created by JetBrains PhpStorm.
 * User: wuqunfei
 * Date: 13-9-19
 * Time: 14:21
 *
 */

include 'uhttplib.php';

/**
 * 1. GET Method
 *
 */
$url = "http://www.python.org/";
$req = new UHttpLib($url,false,60);
$response = $req->Get();
echo $response;



/**
 * 2. Post Method
 */

$url = "http://www.google.com";
$req = new UHttpLib($url);
$response = $req->Post();
echo $response;


/**
 * 3. With Request Params
 */
$url = "http://www.google.com";

$params = array();
$params['q'] = "moon cake";

$req = new UHttpLib($url,false,60);
$response = $req->Get($params);
echo $response;



/**
 * 4. Parse HTML
 */


