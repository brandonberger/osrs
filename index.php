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

$klein->onHttpError(function ($code, $router) {
    $service = $router->service();
    switch ($code) {
        case 404:
            $service->title = "404 | Old School RuneScape RNG Simulator";
            $service->description = "Uh Oh, this page must've gone skilling.";
            $service->url = 'https://rngsimulator.com/404';
            $service->render('templates/404.php');
            break;
    }
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


