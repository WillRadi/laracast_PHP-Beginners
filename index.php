<?php

require "vendor/autoload.php";

require "core/bootstrap.php";

Router::load('Proj/routes.php')
    ->direct(Request::uri(), Request::method());