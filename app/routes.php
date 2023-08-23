<?php

$router->get('about', 'PageController@about');

$router->get('articles/create', 'ArticleController@create');
$router->post('articles/store', 'ArticleController@store');

$router->get('articles', 'ArticleController@index');
$router->get('articles', 'ArticleController@show');

$router->get('article/edit', 'ArticleController@edit');
$router->post('article/update', 'ArticleController@update');

$router->post('article/delete', 'ArticleController@delete');
