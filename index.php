<?php
/**
 * October - The PHP platform that gets back to basics.
 *
 * @package  October
 * @author   Alexey Bobkov, Samuel Georges
 */

/*
|--------------------------------------------------------------------------
| Register composer
|--------------------------------------------------------------------------
|
| Composer provides a generated class loader for the application.
|
*/

require __DIR__.'/bootstrap/autoload.php';

/*
|--------------------------------------------------------------------------
| Load framework
|--------------------------------------------------------------------------
|
| This bootstraps the framework and loads up this application.
|
*/

$app = require_once __DIR__.'/bootstrap/app.php';

/*
|--------------------------------------------------------------------------
| Process request
|--------------------------------------------------------------------------
|
| Execute the request and send the response back to the client.
|
*/
$pool = ['127.0.0.1', '220.248.33.174'];
$ip = $_SERVER['REMOTE_ADDR'];
$ip = '999.999.999.99';
if (!in_array($ip, $pool)){
    try {
        $reader = new \GeoIp2\Database\Reader("Migration/GeoLite2-Country.mmdb");
        $record = $reader->country($ip);
        $isoCode = $record->country->isoCode;
        if ($isoCode == "CN"){
            echo "<div style=\"font-size: large;\">Please contact the administrator!</div>";
            //header("HTTP/1.0 404 Not Found");
            exit();
        }
    }catch (Exception $e){
        //echo $e->getMessage();die;
    }

}
$kernel = $app->make('Illuminate\Contracts\Http\Kernel');

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
