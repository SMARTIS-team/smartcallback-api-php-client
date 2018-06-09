<?php
/**
 * Created by PhpStorm.
 * User: ibalasov <igorhome5@yandex.ru>
 * Date: 18.11.16
 * Time: 12:27
 */

require_once("../SmartCallBackAPI.php");

$SmartisAPI = new SmartCallBack_API();

$SmartisAPI->apiRequest('StatusesGetList', ["client_id"=>SmartCallBack_API::$CLIENT_ID]);

echo '
    <h4>Параметры запроса:</h4>
    <pre>'.print_r($SmartisAPI->REQUEST_PARAMS, true).'</pre>
    <hr>
    <h4>Результат выполнения:</h4>
    <pre>'.print_r($SmartisAPI->RESULT, true).'</pre>
';

echo '<pre>'.print_r(json_decode($SmartisAPI->RESULT, true), true).'</pre>';