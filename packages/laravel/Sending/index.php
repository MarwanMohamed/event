<?php

require_once __DIR__. '/vendor/autoload.php';

$do = new Sending\Send();

 $do->line('user Register ')->action('UserEvent');