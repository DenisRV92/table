<?php
require_once './src/Table.php';
require_once './src/HTMLPage.php';

$page = new HTMLPage(5);
$page->renderButtons();
$page->renderPage();