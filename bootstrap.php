<?php

require "database/QueryBuilder.php";

require "database/Connection.php";

$config = require "config.php";

return new QueryBuilder(Connection::make($config['database']));