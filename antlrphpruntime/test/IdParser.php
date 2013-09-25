<?php
// $ANTLR 3.4 Id.g 2013-09-25 16:48:54


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

class IdParser extends Parser {
    public static $tokenNames = array(
        "<invalid>", "<EOR>", "<DOWN>", "<UP>", "Id", "Letter", "Ws"
    );

    public $EOF=-1;
    public $Id=4;
    public $Letter=5;
    public $Ws=6;

    // delegates
    function getDelegates() {
        return array(  );
    }

    // delegators


    static public $FOLLOW_Id_in_ids27 = array(1 => 1, 4 => 4);



    public function __construct($input, $state = null) {
        if($state==null){
            $state = new RecognizerSharedState();
        }
        parent::__construct($input, $state);

    }

    public function getTokenNames() { return IdParser::$tokenNames; }
    public function getGrammarFileName() { return "Id.g"; }



    // $ANTLR start "ids"
    // Id.g:
    public function ids(){
        $id = null;

        try {
            // Id.g:
            // Id.g:
            {
            // Id.g:
            $cnt1=0;
            //loop1:
            do {
                $alt1=2;
                $LA1_0 = $this->input->LA(1);

                if ( ($LA1_0==$this->getToken('Id')) ) {
                    $alt1=1;
                }


                switch ($alt1) {
            	case 1 :
            	    // Id.g:
            	    {
            	    $id=$this->match($this->input,$this->getToken('Id'),self::$FOLLOW_Id_in_ids27); 

            	    echo ($id!=null?$id->getText():null)."\n";

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
    // $ANTLR end "ids"

    // Delegated rules



}

 

?>