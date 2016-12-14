<?php
/**
 * Created by PhpStorm.
 * User: ibalashov <igorhome5@yandex.ru>
 * Date: 18.11.16
 * Time: 12:11
 */

require_once("../SmartCallBackAPI.php");

$POST = Array(
    "query_id" => 510674,
);

$SmartCallBackAPI = new SmartCallBack_API();
$SmartCallBackAPI->getQuery($POST);

echo '
    <h4>Параметры запроса:</h4>
    <pre>'.print_r($SmartCallBackAPI->REQUEST_PARAMS, true).'</pre>
    <hr>
    <h4>Результат выполнения:</h4>
    <pre>'.print_r($SmartCallBackAPI->RESULT, true).'</pre>
    <pre>'.print_r(json_decode($SmartCallBackAPI->RESULT, true), true).'</pre>
';