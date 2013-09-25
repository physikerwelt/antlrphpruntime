<?php
// $ANTLR 3.4 Id.g 2013-09-25 16:48:55


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

 

class IdLexer extends Lexer {
    const T_EOF=-1;
    const T_Id=4;
    const T_Letter=5;
    const T_Ws=6;

    // delegates
    // delegators

    function getDelegates() {
        return array(  );
    }

    function __construct($input, $state=null){
        parent::__construct($input,$state);

    }
    function getGrammarFileName() { return "Id.g"; }

    // $ANTLR start "Id"
    function mId(){
        try {
            $_type = IdLexer::T_Id;
            $_channel = IdLexer::DEFAULT_TOKEN_CHANNEL;
    	$input = $this->input;
            // Id.g:
            // Id.g:
            {
            $this->mLetter(); 


            // Id.g:
            //loop1:
            do {
                $alt1=2;
                $LA1_0 = $this->input->LA(1);

                if ( (($LA1_0 >= $this->getToken('48') && $LA1_0 <= $this->getToken('57'))||($LA1_0 >= $this->getToken('65') && $LA1_0 <= $this->getToken('90'))||$LA1_0==$this->getToken('95')||($LA1_0 >= $this->getToken('97') && $LA1_0 <= $this->getToken('122'))) ) {
                    $alt1=1;
                }


                switch ($alt1) {
            	case 1 :
            	    // Id.g:
            	    {
            	    if ( ($this->input->LA(1) >= $this->getToken('48') && $this->input->LA(1) <= $this->getToken('57'))||($this->input->LA(1) >= $this->getToken('65') && $this->input->LA(1) <= $this->getToken('90'))||$this->input->LA(1)==$this->getToken('95')||($this->input->LA(1) >= $this->getToken('97') && $this->input->LA(1) <= $this->getToken('122')) ) {
            	        $this->input->consume();
            	    } else {
            	        $mse = new MismatchedSetException(null,$this->input);
            	        $this->recover($mse);
            	        throw $mse;
            	    }


            	    }
            	    break;

            	default :
            	    break 2;//loop1;
                }
            } while (true);


            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "Id"

    // $ANTLR start "Letter"
    function mLetter(){
        try {
            // Id.g:
            // Id.g:
            {
            if ( ($this->input->LA(1) >= $this->getToken('65') && $this->input->LA(1) <= $this->getToken('90'))||($this->input->LA(1) >= $this->getToken('97') && $this->input->LA(1) <= $this->getToken('122')) ) {
                $this->input->consume();
            } else {
                $mse = new MismatchedSetException(null,$this->input);
                $this->recover($mse);
                throw $mse;
            }


            }


        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "Letter"

    // $ANTLR start "Ws"
    function mWs(){
        try {
            $_type = IdLexer::T_Ws;
            $_channel = IdLexer::DEFAULT_TOKEN_CHANNEL;
    	$input = $this->input;
            // Id.g:
            // Id.g:
            {
            // Id.g:
            $cnt2=0;
            //loop2:
            do {
                $alt2=2;
                $LA2_0 = $this->input->LA(1);

                if ( (($LA2_0 >= $this->getToken('9') && $LA2_0 <= $this->getToken('10'))||$LA2_0==$this->getToken('13')||$LA2_0==$this->getToken('32')) ) {
                    $alt2=1;
                }


                switch ($alt2) {
            	case 1 :
            	    // Id.g:
            	    {
            	    if ( ($this->input->LA(1) >= $this->getToken('9') && $this->input->LA(1) <= $this->getToken('10'))||$this->input->LA(1)==$this->getToken('13')||$this->input->LA(1)==$this->getToken('32') ) {
            	        $this->input->consume();
            	    } else {
            	        $mse = new MismatchedSetException(null,$this->input);
            	        $this->recover($mse);
            	        throw $mse;
            	    }


            	    }
            	    break;

            	default :
            	    if ( $cnt2 >= 1 ) break 2;//loop2;
                        $eee =
                            new EarlyExitException(2, $this->input);
                        throw $eee;
                }
                $cnt2++;
            } while (true);


            $_channel=self::$HIDDEN;

            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "Ws"

    function mTokens(){
        // Id.g:
        $alt3=2;
        $LA3_0 = $this->input->LA(1);

        if ( (($LA3_0 >= $this->getToken('65') && $LA3_0 <= $this->getToken('90'))||($LA3_0 >= $this->getToken('97') && $LA3_0 <= $this->getToken('122'))) ) {
            $alt3=1;
        }
        else if ( (($LA3_0 >= $this->getToken('9') && $LA3_0 <= $this->getToken('10'))||$LA3_0==$this->getToken('13')||$LA3_0==$this->getToken('32')) ) {
            $alt3=2;
        }
        else {
            $nvae = new NoViableAltException("", 3, 0, $this->input);

            throw $nvae;

        }
        switch ($alt3) {
            case 1 :
                // Id.g:
                {
                $this->mId(); 


                }
                break;
            case 2 :
                // Id.g:
                {
                $this->mWs(); 


                }
                break;

        }

    }



}
?>