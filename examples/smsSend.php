<?php
/**
 * Created by PhpStorm.
 * User: ibalashov <igorhome5@yandex.ru>
 * Date: 18.11.16
 * Time: 12:11
 */

use Smartis\SmartCallBack\API;
require_once '../src/API.php';
$configs = parse_ini_file('../config.ini');


$SmartCallBackAPI = new API($configs['CLIENT_TOKEN'], $configs['API_TOKEN'], $configs['API_SIGNATURE']);
$SmartCallBackAPI->sendSms([
    'domen_id'      => 4674,
    'phoneto'       => 'INSERT PHONE DESTINATION',

    //Можно зарегистрировать своих текстовых отправителей или приобрести специальные номера от имени которых будет отправляться смс, по умолчанию - SMARTIS
    'phonefrom'     => 'SMARTIS',

    'message' => 'Тестовая СМС через API https://smartis.bi?utm_source=sms&utm_medium=rss&utm_campaign=api_tests&utm_content=smartcallback_lib',
]);

echo '
    <h4>Параметры запроса:</h4>
    <pre>'.print_r($SmartCallBackAPI->REQUEST_PARAMS, true).'</pre>
    <hr>
    <h4>Результат выполнения:</h4>
    <pre>'.print_r($SmartCallBackAPI->RESULT, true).'</pre>
';