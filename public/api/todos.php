<?php

$output = [
    'success' => false
];

$method = $_SERVER['REQUEST_METHOD'];
$action = $_GET['action'];

require_once('db_connect.php');

switch ($method){
    case 'GET':
       require_once('get/'.$action.'.php');
        break;
    case 'POST':
        $output['message'] = 'this is a post request';
        break;
    case 'DELETE':
        $output['message'] = 'this is a delete request';
        break;
    case 'PATCH':
        $output['message'] = 'this is a patch request';
        break;
    default:
        $output['ERROR'] = 'there is an error';
}

$output = json_encode($output);

print $output;