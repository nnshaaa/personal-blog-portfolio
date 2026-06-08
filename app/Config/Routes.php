<?php

use CodeIgniter\Router\RouteCollection;

$routes->get('/', 'Portfolio::home');
$routes->get('home', 'Portfolio::home');
$routes->get('about', 'Portfolio::about');
$routes->get('projects', 'Portfolio::projects');
$routes->get('project-details', 'Portfolio::projectDetails1');
$routes->get('blog', 'Portfolio::blog');
$routes->get('blog-post-1', 'Portfolio::blogPost1');
$routes->get('blog-post-2', 'Portfolio::blogPost2');
$routes->get('blog-post-3', 'Portfolio::blogPost3');
$routes->get('contact', 'Portfolio::contact');
