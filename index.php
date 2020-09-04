<?php
//SECURITE
define('PWKCMS', true);
define('ROOT_PATH', @dirname(__FILE__) );
define('INCLUDE_PATH', ROOT_PATH.'/');
define('REQUEST_URI', $_SERVER['REQUEST_URI']);
//SESSION
session_start();
//AJOUT DU GROUPE VISITEURS A TOUT LE MONDE
if(is_null(@$_SESSION['cms_groupes'])){$_SESSION['cms_groupes'][]='1';}
//CHARGEMENT CONFIG
include('01-KERNEL/config.php');
//CONNEXION BDD
include('01-KERNEL/bdd.php');
//CHARGEMENT LANGUE PAR DEFAUT
include('01-KERNEL/LANG/'.$_PWK_LG.'.php');
//CHARGEMENT FIREWALL
include('01-KERNEL/firewall.php');
//CHARGEMENT DU TEMPLATE
include('03-TEMPLATE/'.$_PWK_TEMPLATE.'/'.$_PWK_TEMPLATE.'.php');
?>
