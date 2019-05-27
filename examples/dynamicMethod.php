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


//Другой пример - получения заявок
/*$SmartisAPI->apiRequest('getQueryList', [
    "client_id"=>SmartCallBack_API::$CLIENT_ID,
    "domen" => "YOUR_DOMAIN_ID",
    "date_from" => "2018-05-18 00:00:00",
    "date_to" => "2018-05-21 23:59:59"
]);*/