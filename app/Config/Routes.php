<?php

use CodeIgniter\Router\RouteCollection;

$routes->get('/', 'Portfolio::home');
$routes->get('home', 'Portfolio::home');
$routes->get('about', 'Portfolio::about');
$routes->get('projects', 'Portfolio::projects');
$routes->get('project-details-lakaranimpian', 'Portfolio::projectDetails1');
$routes->get('project-details-heykawan', 'Portfolio::projectDetails2');
$routes->get('project-details-eduhub', 'Portfolio::projectDetails3');
$routes->get('project-details-speakhand', 'Portfolio::projectDetails4');
$routes->get('project-details-iot', 'Portfolio::projectDetails5');
$routes->get('blog', 'Portfolio::blog');
$routes->get('blog-post-1', 'Portfolio::blogPost1');
$routes->get('blog-post-2', 'Portfolio::blogPost2');
$routes->get('blog-post-3', 'Portfolio::blogPost3');
$routes->get('contact', 'Portfolio::contact');
