<?php

print "Running test...\n";
define(DIRECTORY_SEPARATOR, '/');
spl_autoload_register(

    function ($class) {
        if (strpos($class, "Antlr\Runtime") !== false) {
            require "../../" .
		str_replace("\\", DIRECTORY_SEPARATOR, $class) . ".php";
        } else if (strpos($class, "Antlr\Tests") !== false) {
            require __DIR__ . "/" . str_replace("\\", DIRECTORY_SEPARATOR, $class) . ".php";
        }
    }
);

use Antlr\Runtime\ANTLRStringStream;
use Antlr\Runtime\ANTLRFileStream;
use Antlr\Runtime\CommonTokenStream;
use Antlr\Runtime\BaseRecognizer;
use Antlr\Runtime\Token;
//$br = new BaseRecognizer();

require_once 'CommonLexer.php';
require_once 'Simple_CommonLexer.php';
require_once 'SimpleLexer.php';
require_once 'SimpleParser.php';

#
# usage: php Main.php input
#
define('HIDDEN',99); //BUGFIX physikerwelt 6 June 13 (no idea what it does, but solves the problem)
$input = new ANTLRFileStream(dirname(__FILE__).DIRECTORY_SEPARATOR.$argv[1]);
$lexer = new SimpleLexer($input);
//$lexer = new CommonLexer($input);
$tokens = new CommonTokenStream($lexer);

echo "\nTokens:\n";
foreach ($tokens->getTokens() as $t) {
		echo $t."\n";
}

$parser = new SimpleParser($tokens);
echo "\nParser result:\n";
$parser->file();

?>
