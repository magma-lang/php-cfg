<?php

ini_set( 'display_errors', true );
define( 'START_TIME', microtime( true ) );

define( 'DIR', __DIR__. DIRECTORY_SEPARATOR );
require_once( DIR. 'engine.php' );

$engine = new MagmaCfg\Engine( DIR. 'tmp/', true );

$cfg = $engine->go( DIR. 'cfg/test.mgcfg' );

echo "\n\nCFG:\n";
var_dump( $cfg );

/*echo "\n\nFile:\n";
readfile( DIR. 'tmp/22448ca02f46138f1fcb87af338b5421.php' );*/

echo "\n". (microtime(true) - START_TIME). 'ms';