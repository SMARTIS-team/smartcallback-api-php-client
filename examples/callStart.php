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
$SmartCallBackAPI->callStart([
    'domen_id'      => 4674,
    'phoneto'       => 'INSERT PHONE YOU WANT TO CALL',
    'phonefrom'     => 'INSERT YOUR PHONE',

    //IF you want to call now - left a commented
    //'convenient'    => '2019-05-28 8:15',

    'utm_source'    => 'api',
    'utm_medium'    => 'test',
    'utm_campaign'  => 'test_campaign',
    'utm_content'   => 'utm_content',
    'utm_term'      => 'utm_term',
    'comment'       => 'comment',
    'call_direction'=> 1, //1 - сначала phonefrom, 2 - сначала phoneto

    'robotext_without_operator_action' => '',
    'robotext_with_operator_action' => '',
]);

echo '
    <h4>Параметры запроса:</h4>
    <pre>'.print_r($SmartCallBackAPI->REQUEST_PARAMS, true).'</pre>
    <hr>
    <h4>Результат выполнения:</h4>
    <pre>'.print_r(json_decode($SmartCallBackAPI->RESULT, true), true).'</pre>
';