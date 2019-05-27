<?php
/**
 * Created by PhpStorm.
 * User: ibalashov <igorhome5@yandex.ru>
 * Date: 18.11.16
 * Time: 12:11
 */

use Smartis\SmartCallBack\API;
require_once '../src/API.php';

$POST = Array(
    "date_from" => strtotime('2019-03-01'),
    "date_to"   => strtotime('2019-04-01'),
);
$configs = parse_ini_file('../config.ini');
$SmartCallBackAPI = new API($configs['CLIENT_TOKEN'], $configs['API_TOKEN'], $configs['API_SIGNATURE']);

$SmartCallBackAPI->getQueryList($POST);

echo '
    <h4>Параметры запроса:</h4>
    <pre>'.print_r($SmartCallBackAPI->REQUEST_PARAMS, true).'</pre>
    <hr>
    <h4>Результат выполнения:</h4>
    <pre>'.print_r($SmartCallBackAPI->RESULT, true).'</pre>
    <pre>'.print_r(json_decode($SmartCallBackAPI->RESULT, true), true).'</pre>
';