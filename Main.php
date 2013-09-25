<?php

print "Running ID test...\n";

spl_autoload_register(

    function ($class) {
        if (strpos($class, "Antlr\Runtime") !== false) {
            require "antlrphpruntime/" .
		str_replace("\\", DIRECTORY_SEPARATOR, $class) . ".php";
        } else if (strpos($class, "Antlr\Tests") !== false) {
            require __DIR__ . "/" . str_replace("\\", DIRECTORY_SEPARATOR, $class) . ".php";
        }
    }
);

require_once 'texvc.php';

#
# usage: php Main.php input
#
use Antlr\Runtime\ANTLRStringStream;
use Antlr\Runtime\CommonTokenStream;


$input = file_get_contents('input');
$ass = new ANTLRStringStream($input);
$lexer = new texvc($ass);
$tokens = new CommonTokenStream($lexer);

foreach ($tokens->getTokens() as $t) {
		echo $t."\n";

}
die('all right');


?>
