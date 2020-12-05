<?php
$loader = require($_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php');
$klein = new \Klein\Klein();


$klein->with('/', function() use ($klein) {
    $klein->respond('GET', '', function ($request, $response, $service, $app) {
        $service->render('templates/home.php');
    });
    $klein->respond('GET', 'about', function ($request, $response, $service, $app) {
        $service->render('templates/about.php');
    });
});


// $klein->with('/api', function() use ($klein) {
//     $klein->respond('GET', '/hiscoreParser', function ($request, $response, $service, $app) {
//         $parser = new \Library\HiscoreParser;
//         return $parser->parseHiscores($_GET);
//     });

//     $klein->respond('GET', '/displayHiscores', function ($request, $response, $service, $app) {
//         $service->skills = $_GET['skills'];
//         $service->render('templates/hiscores.php');
//     });

//     $klein->respond('GET', '/getDrop', function ($request, $response, $service, $app) {
//         $RNG = new \Library\RNG;
//         echo $RNG->roll($request->param('monsterId'));
//     });

//     $klein->respond('GET', '/getTable', function ($request, $response, $service, $app) {
//         $monster = $request->param('monster');
//         echo '<script src="'.$_SERVER['DOCUMENT_ROOT'].'/public/js/tables/monsters/'.$monster.'.js"></script>';
//     });
// });


$klein->dispatch();


?>


