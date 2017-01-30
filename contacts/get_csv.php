<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog.php");
$str = 'jebjbfoiw  heevhv  iifvfv vifvfiuv
hevchvce kich iqwbu qigqu biuvqu
hvchvc chwv juqu  qdjbbqw';

header("Content-Type: application/force-download");
header("Content-Type: text/csv");
header("Content-Type: application/download");
header("Content-Description: File Transfer");


echo $str;
