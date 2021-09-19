<?php

$abc = '1a2b3c4b5d6e7f8g9h0';
$abcOut = preg_replace("/[0-9]/", "", $abc);
echo $abcOut;