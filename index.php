<?php

require 'vendor/autoload.php';
date_default_timezone_set ('America/New_York');

$app = new \Slim\Slim(array(
  'view' => new \Slim\Views\Twig()
));

$view = $app->view();
$view->parserOptions = array(
  'debug' => true
);

$view->parserExternsions = array(
  new \Slim\Views\TwigExtension(),
);

$app->get('/', function() use($app){
    $app->render('main.twig');
});

$app->get('/contact', function() use($app){
    $app->render('contact.twig');
});

$app->get('/about', function() use($app){
    $app->render('about.twig');
});

$app->get('/training', function() use($app){
    $app->render('training.twig');
});

$app->get('/blog', function() use($app){
    $app->render('blog.twig');
});

$app->get('/resume', function() use($app){
    $app->render('resume.twig');
});

$app->run();
