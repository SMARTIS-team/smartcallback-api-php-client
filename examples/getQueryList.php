<?php
/**
 * Created by PhpStorm.
 * User: ibalashov <igorhome5@yandex.ru>
 * Date: 18.11.16
 * Time: 12:11
 */

require_once("../SmartCallBackAPI.php");

$POST = Array(
    "date_from" => 1536354000,//strtotime('14.12.2016'),
    "date_to"   => 1536354000,//strtotime('15.12.2016'),
);

$SmartCallBackAPI = new SmartCallBack_API();
$SmartCallBackAPI->getQueryList($POST);

echo '
    <h4>Параметры запроса:</h4>
    <pre>'.print_r($SmartCallBackAPI->REQUEST_PARAMS, true).'</pre>
    <hr>
    <h4>Результат выполнения:</h4>
    <pre>'.print_r($SmartCallBackAPI->RESULT, true).'</pre>
    <pre>'.print_r(json_decode($SmartCallBackAPI->RESULT, true), true).'</pre>
';