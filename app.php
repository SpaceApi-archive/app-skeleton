<?php

//********************************************************************
// do not edit this section

if(!defined("APPSDIR"))
    die("Direct access is not allowed!");

$app_dir = realpath(dirname(__FILE__));
// remove the full path of the document root
$app_dir = str_replace(ROOTDIR, "", $app_dir);

$page->setActivePage(basename($app_dir));

//********************************************************************


// inject your stylesheet if you need it
//$page->addStylesheet("$app_dir/css/style.css");

// inject your javascript if you need it
//$page->addScript("$app_dir/scripts/appname.js");

$html = <<<HTML

    <section>
        <h2>Hello World!</h2>

        It's very straight forward to create a new app. Just have a look at the documentation or at existing apps.

    </section>
HTML;

$page->addContent($html);