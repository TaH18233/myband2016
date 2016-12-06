<?php

// Gebruikersnaam, wachtwoord van de database etc ophalen
require 'includes/config.php' ;
// Laad de Smarty bibliotheek in
require_once 'libs/smarty/Smarty.class.php';
// Voer instellingen uit en stel template parser in
require 'includes/bootstrap.php' ;
// Maak de database connectie
require_once 'includes/database.php' ;
require 'includes/function.php';

// Koppel de waarde van de paginatitel aan te smarty tag 'title'
$templateParser->assign('title', 'nickelback');
// Toon de template: output html
$templateParser->display('head.tpl');

$templateParser->display('header.tpl');

$page=isset($_GET['page'])?$_GET['page']:'home';
$templateParser->assign('page',$page);
$templateParser->display('active.tpl');

switch($page){

    case 'home':
        $page_nr = isset($_GET['page_nr'])?$_GET['page_nr']:1;
        include('logic/select_newsarticles.php');
        $templateParser->assign('result',$result);
        //calculate total number of articles
        include('logic/get_nr_articles.php');
        $templateParser->assign('total_number_articles',$total_number_articles);
        $templateParser->display('home.tpl');
        break;
    case 'news':
        $templateParser->display('news.tpl');
        $templateParser->display('active.tpl');
        break;
    case 'tour':
        $templateParser->display('active.tpl');
        $templateParser->display('tour.tpl');
        break;
    case 'songs':
        $templateParser->display('songs.tpl');
        $templateParser->display('active.tpl');
        break;
    case 'video':
        $templateParser->display('videos.tpl');
        $templateParser->display('active.tpl');
        break;
    case 'search':
        $templateParser->display('search.tpl');
        }
        break;
    default:
        //defealt
}
$templateParser->display('footer.tpl');
