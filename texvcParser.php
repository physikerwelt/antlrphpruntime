<?php
// $ANTLR 3.4 texvc.g 2013-09-25 21:25:52


use Antlr\Runtime\IntStream;
use Antlr\Runtime\DFA;
use Antlr\Runtime\Parser;
use Antlr\Runtime\Lexer;
use Antlr\Runtime\CommonToken;
use Antlr\Runtime\Set;
use Antlr\Runtime\Token;
use Antlr\Runtime\CharStream;
use Antlr\Runtime\RecognizerSharedState;
use Antlr\Runtime\ParserRuleReturnScope;

use Antlr\Runtime\EarlyExitException;
use Antlr\Runtime\FailedPredicateException;
use Antlr\Runtime\MismatchedRangeException;
use Antlr\Runtime\MismatchedSetException;
use Antlr\Runtime\MismatchedTokenException;
use Antlr\Runtime\NoViableAltException;
use Antlr\Runtime\RecognitionException;
use Antlr\Runtime\UnwantedtokenException;

use Antlr\Runtime\Tree\RewriteRuleTokenStream;
use Antlr\Runtime\Tree\RewriteRuleSubtreeStream;

class texvcParser extends Parser {
    public static $tokenNames = array(
        "<invalid>", "<EOR>", "<DOWN>", "<UP>", "ABOXCHARS", "ALPHA", "BOXCHARS", "DELIMITER_UF_LT", "DELIMITER_UF_OP", "LATEX_FUNCTION_NAMES", "LITERAL_ID", "LITERAL_MN", "LITERAL_UF_LT", "LITERAL_UF_OP", "MEDIAWIKI_FUNCTION_NAMES", "SPACE", "'\\\\'"
    );

    public $EOF=-1;
    public $T__16=16;
    public $ABOXCHARS=4;
    public $ALPHA=5;
    public $BOXCHARS=6;
    public $DELIMITER_UF_LT=7;
    public $DELIMITER_UF_OP=8;
    public $LATEX_FUNCTION_NAMES=9;
    public $LITERAL_ID=10;
    public $LITERAL_MN=11;
    public $LITERAL_UF_LT=12;
    public $LITERAL_UF_OP=13;
    public $MEDIAWIKI_FUNCTION_NAMES=14;
    public $SPACE=15;

    // delegates
    function getDelegates() {
        return array(  );
    }

    // delegators


    static public $FOLLOW_16_in_texvc562 = array(9 => 9);
    static public $FOLLOW_LATEX_FUNCTION_NAMES_in_texvc566 = array(15 => 15);
    static public $FOLLOW_SPACE_in_texvc568 = array(6 => 6);
    static public $FOLLOW_BOXCHARS_in_texvc570 = array(6 => 6, 15 => 15);
    static public $FOLLOW_SPACE_in_texvc573 = array(1 => 1);



    public function __construct($input, $state = null) {
        if($state==null){
            $state = new RecognizerSharedState();
        }
        parent::__construct($input, $state);

    }

    public function getTokenNames() { return texvcParser::$tokenNames; }
    public function getGrammarFileName() { return "texvc.g"; }



    // $ANTLR start "texvc"
    // texvc.g:
    public function texvc(){
        try {
            // texvc.g:
            // texvc.g:
            {
            $this->match($this->input,$this->getToken('16'),self::$FOLLOW_16_in_texvc562); 

            $this->match($this->input,$this->getToken('LATEX_FUNCTION_NAMES'),self::$FOLLOW_LATEX_FUNCTION_NAMES_in_texvc566); 

            $this->match($this->input,$this->getToken('SPACE'),self::$FOLLOW_SPACE_in_texvc568); 

            // texvc.g:
            $cnt1=0;
            //loop1:
            do {
                $alt1=2;
                $LA1_0 = $this->input->LA(1);

                if ( ($LA1_0==$this->getToken('BOXCHARS')) ) {
                    $alt1=1;
                }


                switch ($alt1) {
            	case 1 :
            	    // texvc.g:
            	    {
            	    $this->match($this->input,$this->getToken('BOXCHARS'),self::$FOLLOW_BOXCHARS_in_texvc570); 

            	    }
            	    break;

            	default :
            	    if ( $cnt1 >= 1 ) break 2;//loop1;
                        $eee =
                            new EarlyExitException(1, $this->input);
                        throw $eee;
                }
                $cnt1++;
            } while (true);


            $this->match($this->input,$this->getToken('SPACE'),self::$FOLLOW_SPACE_in_texvc573); 

            }

        }
        catch (RecognitionException $re) {
            $this->reportError($re);
            $this->recover($this->input,$re);
        }

        catch(Exception $e) {
            throw $e;
        }

        return ;
    }
    // $ANTLR end "texvc"

    // Delegated rules



}

 

?>