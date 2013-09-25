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

 

class texvcLexer extends Lexer {
    const T_EOF=-1;
    const T_T__16=16;
    const T_ABOXCHARS=4;
    const T_ALPHA=5;
    const T_BOXCHARS=6;
    const T_DELIMITER_UF_LT=7;
    const T_DELIMITER_UF_OP=8;
    const T_LATEX_FUNCTION_NAMES=9;
    const T_LITERAL_ID=10;
    const T_LITERAL_MN=11;
    const T_LITERAL_UF_LT=12;
    const T_LITERAL_UF_OP=13;
    const T_MEDIAWIKI_FUNCTION_NAMES=14;
    const T_SPACE=15;

    // delegates
    // delegators

    function getDelegates() {
        return array(  );
    }

    function __construct($input, $state=null){
        parent::__construct($input,$state);

    }
    function getGrammarFileName() { return "texvc.g"; }

    // $ANTLR start "T__16"
    function mT__16(){
        try {
            $_type = texvcLexer::T_T__16;
            $_channel = texvcLexer::DEFAULT_TOKEN_CHANNEL;
    	$input = $this->input;
            // texvc.g:
            // texvc.g:
            {
            $this->matchChar(92); 

            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "T__16"

    // $ANTLR start "SPACE"
    function mSPACE(){
        try {
            // texvc.g:
            // texvc.g:
            {
            if ( ($this->input->LA(1) >= $this->getToken('9') && $this->input->LA(1) <= $this->getToken('10'))||$this->input->LA(1)==$this->getToken('13')||$this->input->LA(1)==$this->getToken('32') ) {
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
    // $ANTLR end "SPACE"

    // $ANTLR start "ALPHA"
    function mALPHA(){
        try {
            // texvc.g:
            // texvc.g:
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
    // $ANTLR end "ALPHA"

    // $ANTLR start "LITERAL_ID"
    function mLITERAL_ID(){
        try {
            // texvc.g:
            // texvc.g:
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
    // $ANTLR end "LITERAL_ID"

    // $ANTLR start "LITERAL_MN"
    function mLITERAL_MN(){
        try {
            // texvc.g:
            // texvc.g:
            {
            if ( ($this->input->LA(1) >= $this->getToken('48') && $this->input->LA(1) <= $this->getToken('57')) ) {
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
    // $ANTLR end "LITERAL_MN"

    // $ANTLR start "LITERAL_UF_LT"
    function mLITERAL_UF_LT(){
        try {
            // texvc.g:
            // texvc.g:
            {
            if ( $this->input->LA(1)==$this->getToken('33')||$this->input->LA(1)==$this->getToken('39')||$this->input->LA(1)==$this->getToken('44')||($this->input->LA(1) >= $this->getToken('58') && $this->input->LA(1) <= $this->getToken('59'))||$this->input->LA(1)==$this->getToken('63') ) {
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
    // $ANTLR end "LITERAL_UF_LT"

    // $ANTLR start "DELIMITER_UF_LT"
    function mDELIMITER_UF_LT(){
        try {
            // texvc.g:
            // texvc.g:
            {
            if ( ($this->input->LA(1) >= $this->getToken('40') && $this->input->LA(1) <= $this->getToken('41'))||$this->input->LA(1)==$this->getToken('46') ) {
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
    // $ANTLR end "DELIMITER_UF_LT"

    // $ANTLR start "LITERAL_UF_OP"
    function mLITERAL_UF_OP(){
        try {
            // texvc.g:
            // texvc.g:
            {
            // texvc.g:
            $alt1=4;
            $LA1 = $this->input->LA(1);
            if($this->getToken('43')== $LA1)
                {
                $alt1=1;
                }
            else if($this->getToken('46')== $LA1)
                {
                $alt1=2;
                }
            else if($this->getToken('42')== $LA1)
                {
                $alt1=3;
                }
            else if($this->getToken('61')== $LA1)
                {
                $alt1=4;
                }
            else{
                $nvae =
                    new NoViableAltException("", 1, 0, $this->input);

                throw $nvae;

            }

            switch ($alt1) {
                case 1 :
                    // texvc.g:
                    {
                    $this->matchChar(43); 

                    }
                    break;
                case 2 :
                    // texvc.g:
                    {
                    $this->matchString(".."); 



                    }
                    break;
                case 3 :
                    // texvc.g:
                    {
                    $this->matchChar(42); 

                    }
                    break;
                case 4 :
                    // texvc.g:
                    {
                    $this->matchChar(61); 

                    }
                    break;

            }


            }


        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "LITERAL_UF_OP"

    // $ANTLR start "DELIMITER_UF_OP"
    function mDELIMITER_UF_OP(){
        try {
            // texvc.g:
            // texvc.g:
            {
            if ( $this->input->LA(1)==$this->getToken('47')||$this->input->LA(1)==$this->getToken('124') ) {
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
    // $ANTLR end "DELIMITER_UF_OP"

    // $ANTLR start "BOXCHARS"
    function mBOXCHARS(){
        try {
            // texvc.g:
            // texvc.g:
            {
            // texvc.g:
            $alt2=20;
            $LA2 = $this->input->LA(1);
            if($this->getToken('48')== $LA2||$this->getToken('49')== $LA2||$this->getToken('50')== $LA2||$this->getToken('51')== $LA2||$this->getToken('52')== $LA2||$this->getToken('53')== $LA2||$this->getToken('54')== $LA2||$this->getToken('55')== $LA2||$this->getToken('56')== $LA2||$this->getToken('57')== $LA2)
                {
                $alt2=1;
                }
            else if($this->getToken('97')== $LA2||$this->getToken('98')== $LA2||$this->getToken('99')== $LA2||$this->getToken('100')== $LA2||$this->getToken('101')== $LA2||$this->getToken('102')== $LA2||$this->getToken('103')== $LA2||$this->getToken('104')== $LA2||$this->getToken('105')== $LA2||$this->getToken('106')== $LA2||$this->getToken('107')== $LA2||$this->getToken('108')== $LA2||$this->getToken('109')== $LA2||$this->getToken('110')== $LA2||$this->getToken('111')== $LA2||$this->getToken('112')== $LA2||$this->getToken('113')== $LA2||$this->getToken('114')== $LA2||$this->getToken('115')== $LA2||$this->getToken('116')== $LA2||$this->getToken('117')== $LA2||$this->getToken('118')== $LA2||$this->getToken('119')== $LA2||$this->getToken('120')== $LA2||$this->getToken('121')== $LA2||$this->getToken('122')== $LA2)
                {
                $alt2=2;
                }
            else if($this->getToken('65')== $LA2||$this->getToken('66')== $LA2||$this->getToken('67')== $LA2||$this->getToken('68')== $LA2||$this->getToken('69')== $LA2||$this->getToken('70')== $LA2||$this->getToken('71')== $LA2||$this->getToken('72')== $LA2||$this->getToken('73')== $LA2||$this->getToken('74')== $LA2||$this->getToken('75')== $LA2||$this->getToken('76')== $LA2||$this->getToken('77')== $LA2||$this->getToken('78')== $LA2||$this->getToken('79')== $LA2||$this->getToken('80')== $LA2||$this->getToken('81')== $LA2||$this->getToken('82')== $LA2||$this->getToken('83')== $LA2||$this->getToken('84')== $LA2||$this->getToken('85')== $LA2||$this->getToken('86')== $LA2||$this->getToken('87')== $LA2||$this->getToken('88')== $LA2||$this->getToken('89')== $LA2||$this->getToken('90')== $LA2)
                {
                $alt2=3;
                }
            else if($this->getToken('43')== $LA2)
                {
                $alt2=4;
                }
            else if($this->getToken('46')== $LA2)
                {
                $LA2_5 = $this->input->LA(2);

                if ( ($LA2_5==$this->getToken('46')) ) {
                    $alt2=5;
                }
                else {
                    $alt2=15;
                }
                }
            else if($this->getToken('42')== $LA2)
                {
                $alt2=6;
                }
            else if($this->getToken('44')== $LA2)
                {
                $alt2=7;
                }
            else if($this->getToken('61')== $LA2)
                {
                $alt2=8;
                }
            else if($this->getToken('40')== $LA2)
                {
                $alt2=9;
                }
            else if($this->getToken('41')== $LA2)
                {
                $alt2=10;
                }
            else if($this->getToken('58')== $LA2)
                {
                $alt2=11;
                }
            else if($this->getToken('47')== $LA2)
                {
                $alt2=12;
                }
            else if($this->getToken('59')== $LA2)
                {
                $alt2=13;
                }
            else if($this->getToken('63')== $LA2)
                {
                $alt2=14;
                }
            else if($this->getToken('33')== $LA2)
                {
                $alt2=16;
                }
            else if($this->getToken('39')== $LA2)
                {
                $alt2=17;
                }
            else if($this->getToken('96')== $LA2)
                {
                $alt2=18;
                }
            else if($this->getToken('32')== $LA2)
                {
                $alt2=19;
                }
            else if($this->getToken('128')== $LA2||$this->getToken('129')== $LA2||$this->getToken('130')== $LA2||$this->getToken('131')== $LA2||$this->getToken('132')== $LA2||$this->getToken('133')== $LA2||$this->getToken('134')== $LA2||$this->getToken('135')== $LA2||$this->getToken('136')== $LA2||$this->getToken('137')== $LA2||$this->getToken('138')== $LA2||$this->getToken('139')== $LA2||$this->getToken('140')== $LA2||$this->getToken('141')== $LA2||$this->getToken('142')== $LA2||$this->getToken('143')== $LA2||$this->getToken('144')== $LA2||$this->getToken('145')== $LA2||$this->getToken('146')== $LA2||$this->getToken('147')== $LA2||$this->getToken('148')== $LA2||$this->getToken('149')== $LA2||$this->getToken('150')== $LA2||$this->getToken('151')== $LA2||$this->getToken('152')== $LA2||$this->getToken('153')== $LA2||$this->getToken('154')== $LA2||$this->getToken('155')== $LA2||$this->getToken('156')== $LA2||$this->getToken('157')== $LA2||$this->getToken('158')== $LA2||$this->getToken('159')== $LA2||$this->getToken('160')== $LA2||$this->getToken('161')== $LA2||$this->getToken('162')== $LA2||$this->getToken('163')== $LA2||$this->getToken('164')== $LA2||$this->getToken('165')== $LA2||$this->getToken('166')== $LA2||$this->getToken('167')== $LA2||$this->getToken('168')== $LA2||$this->getToken('169')== $LA2||$this->getToken('170')== $LA2||$this->getToken('171')== $LA2||$this->getToken('172')== $LA2||$this->getToken('173')== $LA2||$this->getToken('174')== $LA2||$this->getToken('175')== $LA2||$this->getToken('176')== $LA2||$this->getToken('177')== $LA2||$this->getToken('178')== $LA2||$this->getToken('179')== $LA2||$this->getToken('180')== $LA2||$this->getToken('181')== $LA2||$this->getToken('182')== $LA2||$this->getToken('183')== $LA2||$this->getToken('184')== $LA2||$this->getToken('185')== $LA2||$this->getToken('186')== $LA2||$this->getToken('187')== $LA2||$this->getToken('188')== $LA2||$this->getToken('189')== $LA2||$this->getToken('190')== $LA2||$this->getToken('191')== $LA2||$this->getToken('192')== $LA2||$this->getToken('193')== $LA2||$this->getToken('194')== $LA2||$this->getToken('195')== $LA2||$this->getToken('196')== $LA2||$this->getToken('197')== $LA2||$this->getToken('198')== $LA2||$this->getToken('199')== $LA2||$this->getToken('200')== $LA2||$this->getToken('201')== $LA2||$this->getToken('202')== $LA2||$this->getToken('203')== $LA2||$this->getToken('204')== $LA2||$this->getToken('205')== $LA2||$this->getToken('206')== $LA2||$this->getToken('207')== $LA2||$this->getToken('208')== $LA2||$this->getToken('209')== $LA2||$this->getToken('210')== $LA2||$this->getToken('211')== $LA2||$this->getToken('212')== $LA2||$this->getToken('213')== $LA2||$this->getToken('214')== $LA2||$this->getToken('215')== $LA2||$this->getToken('216')== $LA2||$this->getToken('217')== $LA2||$this->getToken('218')== $LA2||$this->getToken('219')== $LA2||$this->getToken('220')== $LA2||$this->getToken('221')== $LA2||$this->getToken('222')== $LA2||$this->getToken('223')== $LA2||$this->getToken('224')== $LA2||$this->getToken('225')== $LA2||$this->getToken('226')== $LA2||$this->getToken('227')== $LA2||$this->getToken('228')== $LA2||$this->getToken('229')== $LA2||$this->getToken('230')== $LA2||$this->getToken('231')== $LA2||$this->getToken('232')== $LA2||$this->getToken('233')== $LA2||$this->getToken('234')== $LA2||$this->getToken('235')== $LA2||$this->getToken('236')== $LA2||$this->getToken('237')== $LA2||$this->getToken('238')== $LA2||$this->getToken('239')== $LA2||$this->getToken('240')== $LA2||$this->getToken('241')== $LA2||$this->getToken('242')== $LA2||$this->getToken('243')== $LA2||$this->getToken('244')== $LA2||$this->getToken('245')== $LA2||$this->getToken('246')== $LA2||$this->getToken('247')== $LA2||$this->getToken('248')== $LA2||$this->getToken('249')== $LA2||$this->getToken('250')== $LA2||$this->getToken('251')== $LA2||$this->getToken('252')== $LA2||$this->getToken('253')== $LA2||$this->getToken('254')== $LA2||$this->getToken('255')== $LA2)
                {
                $alt2=20;
                }
            else{
                $nvae =
                    new NoViableAltException("", 2, 0, $this->input);

                throw $nvae;

            }

            switch ($alt2) {
                case 1 :
                    // texvc.g:
                    {
                    $this->matchRange(48,57); 

                    }
                    break;
                case 2 :
                    // texvc.g:
                    {
                    $this->matchRange(97,122); 

                    }
                    break;
                case 3 :
                    // texvc.g:
                    {
                    $this->matchRange(65,90); 

                    }
                    break;
                case 4 :
                    // texvc.g:
                    {
                    $this->matchChar(43); 

                    }
                    break;
                case 5 :
                    // texvc.g:
                    {
                    $this->matchString(".."); 



                    }
                    break;
                case 6 :
                    // texvc.g:
                    {
                    $this->matchChar(42); 

                    }
                    break;
                case 7 :
                    // texvc.g:
                    {
                    $this->matchChar(44); 

                    }
                    break;
                case 8 :
                    // texvc.g:
                    {
                    $this->matchChar(61); 

                    }
                    break;
                case 9 :
                    // texvc.g:
                    {
                    $this->matchChar(40); 

                    }
                    break;
                case 10 :
                    // texvc.g:
                    {
                    $this->matchChar(41); 

                    }
                    break;
                case 11 :
                    // texvc.g:
                    {
                    $this->matchChar(58); 

                    }
                    break;
                case 12 :
                    // texvc.g:
                    {
                    $this->matchChar(47); 

                    }
                    break;
                case 13 :
                    // texvc.g:
                    {
                    $this->matchChar(59); 

                    }
                    break;
                case 14 :
                    // texvc.g:
                    {
                    $this->matchChar(63); 

                    }
                    break;
                case 15 :
                    // texvc.g:
                    {
                    $this->matchChar(46); 

                    }
                    break;
                case 16 :
                    // texvc.g:
                    {
                    $this->matchChar(33); 

                    }
                    break;
                case 17 :
                    // texvc.g:
                    {
                    $this->matchChar(39); 

                    }
                    break;
                case 18 :
                    // texvc.g:
                    {
                    $this->matchChar(96); 

                    }
                    break;
                case 19 :
                    // texvc.g:
                    {
                    $this->matchChar(32); 

                    }
                    break;
                case 20 :
                    // texvc.g:
                    {
                    $this->matchRange(128,255); 

                    }
                    break;

            }


            }


        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "BOXCHARS"

    // $ANTLR start "ABOXCHARS"
    function mABOXCHARS(){
        try {
            // texvc.g:
            // texvc.g:
            {
            // texvc.g:
            $alt3=19;
            $LA3 = $this->input->LA(1);
            if($this->getToken('48')== $LA3||$this->getToken('49')== $LA3||$this->getToken('50')== $LA3||$this->getToken('51')== $LA3||$this->getToken('52')== $LA3||$this->getToken('53')== $LA3||$this->getToken('54')== $LA3||$this->getToken('55')== $LA3||$this->getToken('56')== $LA3||$this->getToken('57')== $LA3)
                {
                $alt3=1;
                }
            else if($this->getToken('97')== $LA3||$this->getToken('98')== $LA3||$this->getToken('99')== $LA3||$this->getToken('100')== $LA3||$this->getToken('101')== $LA3||$this->getToken('102')== $LA3||$this->getToken('103')== $LA3||$this->getToken('104')== $LA3||$this->getToken('105')== $LA3||$this->getToken('106')== $LA3||$this->getToken('107')== $LA3||$this->getToken('108')== $LA3||$this->getToken('109')== $LA3||$this->getToken('110')== $LA3||$this->getToken('111')== $LA3||$this->getToken('112')== $LA3||$this->getToken('113')== $LA3||$this->getToken('114')== $LA3||$this->getToken('115')== $LA3||$this->getToken('116')== $LA3||$this->getToken('117')== $LA3||$this->getToken('118')== $LA3||$this->getToken('119')== $LA3||$this->getToken('120')== $LA3||$this->getToken('121')== $LA3||$this->getToken('122')== $LA3)
                {
                $alt3=2;
                }
            else if($this->getToken('65')== $LA3||$this->getToken('66')== $LA3||$this->getToken('67')== $LA3||$this->getToken('68')== $LA3||$this->getToken('69')== $LA3||$this->getToken('70')== $LA3||$this->getToken('71')== $LA3||$this->getToken('72')== $LA3||$this->getToken('73')== $LA3||$this->getToken('74')== $LA3||$this->getToken('75')== $LA3||$this->getToken('76')== $LA3||$this->getToken('77')== $LA3||$this->getToken('78')== $LA3||$this->getToken('79')== $LA3||$this->getToken('80')== $LA3||$this->getToken('81')== $LA3||$this->getToken('82')== $LA3||$this->getToken('83')== $LA3||$this->getToken('84')== $LA3||$this->getToken('85')== $LA3||$this->getToken('86')== $LA3||$this->getToken('87')== $LA3||$this->getToken('88')== $LA3||$this->getToken('89')== $LA3||$this->getToken('90')== $LA3)
                {
                $alt3=3;
                }
            else if($this->getToken('43')== $LA3)
                {
                $alt3=4;
                }
            else if($this->getToken('46')== $LA3)
                {
                $LA3_5 = $this->input->LA(2);

                if ( ($LA3_5==$this->getToken('46')) ) {
                    $alt3=5;
                }
                else {
                    $alt3=15;
                }
                }
            else if($this->getToken('42')== $LA3)
                {
                $alt3=6;
                }
            else if($this->getToken('44')== $LA3)
                {
                $alt3=7;
                }
            else if($this->getToken('61')== $LA3)
                {
                $alt3=8;
                }
            else if($this->getToken('40')== $LA3)
                {
                $alt3=9;
                }
            else if($this->getToken('41')== $LA3)
                {
                $alt3=10;
                }
            else if($this->getToken('58')== $LA3)
                {
                $alt3=11;
                }
            else if($this->getToken('47')== $LA3)
                {
                $alt3=12;
                }
            else if($this->getToken('59')== $LA3)
                {
                $alt3=13;
                }
            else if($this->getToken('63')== $LA3)
                {
                $alt3=14;
                }
            else if($this->getToken('33')== $LA3)
                {
                $alt3=16;
                }
            else if($this->getToken('39')== $LA3)
                {
                $alt3=17;
                }
            else if($this->getToken('96')== $LA3)
                {
                $alt3=18;
                }
            else if($this->getToken('32')== $LA3)
                {
                $alt3=19;
                }
            else{
                $nvae =
                    new NoViableAltException("", 3, 0, $this->input);

                throw $nvae;

            }

            switch ($alt3) {
                case 1 :
                    // texvc.g:
                    {
                    $this->matchRange(48,57); 

                    }
                    break;
                case 2 :
                    // texvc.g:
                    {
                    $this->matchRange(97,122); 

                    }
                    break;
                case 3 :
                    // texvc.g:
                    {
                    $this->matchRange(65,90); 

                    }
                    break;
                case 4 :
                    // texvc.g:
                    {
                    $this->matchChar(43); 

                    }
                    break;
                case 5 :
                    // texvc.g:
                    {
                    $this->matchString(".."); 



                    }
                    break;
                case 6 :
                    // texvc.g:
                    {
                    $this->matchChar(42); 

                    }
                    break;
                case 7 :
                    // texvc.g:
                    {
                    $this->matchChar(44); 

                    }
                    break;
                case 8 :
                    // texvc.g:
                    {
                    $this->matchChar(61); 

                    }
                    break;
                case 9 :
                    // texvc.g:
                    {
                    $this->matchChar(40); 

                    }
                    break;
                case 10 :
                    // texvc.g:
                    {
                    $this->matchChar(41); 

                    }
                    break;
                case 11 :
                    // texvc.g:
                    {
                    $this->matchChar(58); 

                    }
                    break;
                case 12 :
                    // texvc.g:
                    {
                    $this->matchChar(47); 

                    }
                    break;
                case 13 :
                    // texvc.g:
                    {
                    $this->matchChar(59); 

                    }
                    break;
                case 14 :
                    // texvc.g:
                    {
                    $this->matchChar(63); 

                    }
                    break;
                case 15 :
                    // texvc.g:
                    {
                    $this->matchChar(46); 

                    }
                    break;
                case 16 :
                    // texvc.g:
                    {
                    $this->matchChar(33); 

                    }
                    break;
                case 17 :
                    // texvc.g:
                    {
                    $this->matchChar(39); 

                    }
                    break;
                case 18 :
                    // texvc.g:
                    {
                    $this->matchChar(96); 

                    }
                    break;
                case 19 :
                    // texvc.g:
                    {
                    $this->matchChar(32); 

                    }
                    break;

            }


            }


        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "ABOXCHARS"

    // $ANTLR start "LATEX_FUNCTION_NAMES"
    function mLATEX_FUNCTION_NAMES(){
        try {
            // texvc.g:
            // texvc.g:
            {
            // texvc.g:
            $alt4=32;
            $LA4 = $this->input->LA(1);
            if($this->getToken('97')== $LA4)
                {
                $LA4_1 = $this->input->LA(2);

                if ( ($LA4_1==$this->getToken('114')) ) {
                    $LA4_14 = $this->input->LA(3);

                    if ( ($LA4_14==$this->getToken('99')) ) {
                        $LA4 = $this->input->LA(4);
                        if($this->getToken('99')== $LA4)
                            {
                            $alt4=1;
                            }
                        else if($this->getToken('115')== $LA4)
                            {
                            $alt4=2;
                            }
                        else if($this->getToken('116')== $LA4)
                            {
                            $alt4=3;
                            }
                        else{
                            $nvae =
                                new NoViableAltException("", 4, 29, $this->input);

                            throw $nvae;

                        }

                    }
                    else if ( ($LA4_14==$this->getToken('103')) ) {
                        $alt4=4;
                    }
                    else {
                        $nvae = new NoViableAltException("", 4, 14, $this->input);

                        throw $nvae;

                    }
                }
                else {
                    $nvae = new NoViableAltException("", 4, 1, $this->input);

                    throw $nvae;

                }
                }
            else if($this->getToken('99')== $LA4)
                {
                $LA4_2 = $this->input->LA(2);

                if ( ($LA4_2==$this->getToken('111')) ) {
                    $LA4_15 = $this->input->LA(3);

                    if ( ($LA4_15==$this->getToken('115')) ) {
                        $LA4_31 = $this->input->LA(4);

                        if ( ($LA4_31==$this->getToken('104')) ) {
                            $alt4=6;
                        }
                        else {
                            $alt4=5;
                        }
                    }
                    else if ( ($LA4_15==$this->getToken('116')) ) {
                        $LA4_32 = $this->input->LA(4);

                        if ( ($LA4_32==$this->getToken('104')) ) {
                            $alt4=8;
                        }
                        else {
                            $alt4=7;
                        }
                    }
                    else {
                        $nvae = new NoViableAltException("", 4, 15, $this->input);

                        throw $nvae;

                    }
                }
                else if ( ($LA4_2==$this->getToken('115')) ) {
                    $alt4=9;
                }
                else {
                    $nvae = new NoViableAltException("", 4, 2, $this->input);

                    throw $nvae;

                }
                }
            else if($this->getToken('100')== $LA4)
                {
                $LA4_3 = $this->input->LA(2);

                if ( ($LA4_3==$this->getToken('101')) ) {
                    $LA4_17 = $this->input->LA(3);

                    if ( ($LA4_17==$this->getToken('103')) ) {
                        $alt4=10;
                    }
                    else if ( ($LA4_17==$this->getToken('116')) ) {
                        $alt4=11;
                    }
                    else {
                        $nvae = new NoViableAltException("", 4, 17, $this->input);

                        throw $nvae;

                    }
                }
                else if ( ($LA4_3==$this->getToken('105')) ) {
                    $alt4=12;
                }
                else {
                    $nvae = new NoViableAltException("", 4, 3, $this->input);

                    throw $nvae;

                }
                }
            else if($this->getToken('101')== $LA4)
                {
                $alt4=13;
                }
            else if($this->getToken('103')== $LA4)
                {
                $alt4=14;
                }
            else if($this->getToken('104')== $LA4)
                {
                $alt4=15;
                }
            else if($this->getToken('105')== $LA4)
                {
                $alt4=16;
                }
            else if($this->getToken('107')== $LA4)
                {
                $alt4=17;
                }
            else if($this->getToken('108')== $LA4)
                {
                $LA4 = $this->input->LA(2);
                if($this->getToken('103')== $LA4)
                    {
                    $alt4=18;
                    }
                else if($this->getToken('105')== $LA4)
                    {
                    $LA4_20 = $this->input->LA(3);

                    if ( ($LA4_20==$this->getToken('109')) ) {
                        $LA4 = $this->input->LA(4);
                        if($this->getToken('105')== $LA4)
                            {
                            $alt4=20;
                            }
                        else if($this->getToken('115')== $LA4)
                            {
                            $alt4=21;
                            }
                        else{
                            $alt4=19;
                        }

                    }
                    else {
                        $nvae = new NoViableAltException("", 4, 20, $this->input);

                        throw $nvae;

                    }
                    }
                else if($this->getToken('110')== $LA4)
                    {
                    $alt4=22;
                    }
                else if($this->getToken('111')== $LA4)
                    {
                    $alt4=23;
                    }
                else{
                    $nvae =
                        new NoViableAltException("", 4, 9, $this->input);

                    throw $nvae;

                }

                }
            else if($this->getToken('109')== $LA4)
                {
                $LA4_10 = $this->input->LA(2);

                if ( ($LA4_10==$this->getToken('97')) ) {
                    $alt4=24;
                }
                else if ( ($LA4_10==$this->getToken('105')) ) {
                    $alt4=25;
                }
                else {
                    $nvae = new NoViableAltException("", 4, 10, $this->input);

                    throw $nvae;

                }
                }
            else if($this->getToken('80')== $LA4)
                {
                $alt4=26;
                }
            else if($this->getToken('115')== $LA4)
                {
                $LA4 = $this->input->LA(2);
                if($this->getToken('101')== $LA4)
                    {
                    $alt4=27;
                    }
                else if($this->getToken('105')== $LA4)
                    {
                    $LA4_26 = $this->input->LA(3);

                    if ( ($LA4_26==$this->getToken('110')) ) {
                        $LA4_36 = $this->input->LA(4);

                        if ( ($LA4_36==$this->getToken('104')) ) {
                            $alt4=29;
                        }
                        else {
                            $alt4=28;
                        }
                    }
                    else {
                        $nvae = new NoViableAltException("", 4, 26, $this->input);

                        throw $nvae;

                    }
                    }
                else if($this->getToken('117')== $LA4)
                    {
                    $alt4=30;
                    }
                else{
                    $nvae =
                        new NoViableAltException("", 4, 12, $this->input);

                    throw $nvae;

                }

                }
            else if($this->getToken('116')== $LA4)
                {
                $LA4_13 = $this->input->LA(2);

                if ( ($LA4_13==$this->getToken('97')) ) {
                    $LA4_28 = $this->input->LA(3);

                    if ( ($LA4_28==$this->getToken('110')) ) {
                        $LA4_37 = $this->input->LA(4);

                        if ( ($LA4_37==$this->getToken('104')) ) {
                            $alt4=32;
                        }
                        else {
                            $alt4=31;
                        }
                    }
                    else {
                        $nvae = new NoViableAltException("", 4, 28, $this->input);

                        throw $nvae;

                    }
                }
                else {
                    $nvae = new NoViableAltException("", 4, 13, $this->input);

                    throw $nvae;

                }
                }
            else{
                $nvae =
                    new NoViableAltException("", 4, 0, $this->input);

                throw $nvae;

            }

            switch ($alt4) {
                case 1 :
                    // texvc.g:
                    {
                    $this->matchString("arccos"); 



                    }
                    break;
                case 2 :
                    // texvc.g:
                    {
                    $this->matchString("arcsin"); 



                    }
                    break;
                case 3 :
                    // texvc.g:
                    {
                    $this->matchString("arctan"); 



                    }
                    break;
                case 4 :
                    // texvc.g:
                    {
                    $this->matchString("arg"); 



                    }
                    break;
                case 5 :
                    // texvc.g:
                    {
                    $this->matchString("cos"); 



                    }
                    break;
                case 6 :
                    // texvc.g:
                    {
                    $this->matchString("cosh"); 



                    }
                    break;
                case 7 :
                    // texvc.g:
                    {
                    $this->matchString("cot"); 



                    }
                    break;
                case 8 :
                    // texvc.g:
                    {
                    $this->matchString("coth"); 



                    }
                    break;
                case 9 :
                    // texvc.g:
                    {
                    $this->matchString("csc"); 



                    }
                    break;
                case 10 :
                    // texvc.g:
                    {
                    $this->matchString("deg"); 



                    }
                    break;
                case 11 :
                    // texvc.g:
                    {
                    $this->matchString("det"); 



                    }
                    break;
                case 12 :
                    // texvc.g:
                    {
                    $this->matchString("dim"); 



                    }
                    break;
                case 13 :
                    // texvc.g:
                    {
                    $this->matchString("exp"); 



                    }
                    break;
                case 14 :
                    // texvc.g:
                    {
                    $this->matchString("gcd"); 



                    }
                    break;
                case 15 :
                    // texvc.g:
                    {
                    $this->matchString("hom"); 



                    }
                    break;
                case 16 :
                    // texvc.g:
                    {
                    $this->matchString("inf"); 



                    }
                    break;
                case 17 :
                    // texvc.g:
                    {
                    $this->matchString("ker"); 



                    }
                    break;
                case 18 :
                    // texvc.g:
                    {
                    $this->matchString("lg"); 



                    }
                    break;
                case 19 :
                    // texvc.g:
                    {
                    $this->matchString("lim"); 



                    }
                    break;
                case 20 :
                    // texvc.g:
                    {
                    $this->matchString("liminf"); 



                    }
                    break;
                case 21 :
                    // texvc.g:
                    {
                    $this->matchString("limsup"); 



                    }
                    break;
                case 22 :
                    // texvc.g:
                    {
                    $this->matchString("ln"); 



                    }
                    break;
                case 23 :
                    // texvc.g:
                    {
                    $this->matchString("log"); 



                    }
                    break;
                case 24 :
                    // texvc.g:
                    {
                    $this->matchString("max"); 



                    }
                    break;
                case 25 :
                    // texvc.g:
                    {
                    $this->matchString("min"); 



                    }
                    break;
                case 26 :
                    // texvc.g:
                    {
                    $this->matchString("Pr"); 



                    }
                    break;
                case 27 :
                    // texvc.g:
                    {
                    $this->matchString("sec"); 



                    }
                    break;
                case 28 :
                    // texvc.g:
                    {
                    $this->matchString("sin"); 



                    }
                    break;
                case 29 :
                    // texvc.g:
                    {
                    $this->matchString("sinh"); 



                    }
                    break;
                case 30 :
                    // texvc.g:
                    {
                    $this->matchString("sup"); 



                    }
                    break;
                case 31 :
                    // texvc.g:
                    {
                    $this->matchString("tan"); 



                    }
                    break;
                case 32 :
                    // texvc.g:
                    {
                    $this->matchString("tanh"); 



                    }
                    break;

            }


            }


        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "LATEX_FUNCTION_NAMES"

    // $ANTLR start "MEDIAWIKI_FUNCTION_NAMES"
    function mMEDIAWIKI_FUNCTION_NAMES(){
        try {
            // texvc.g:
            // texvc.g:
            {
            // texvc.g:
            $alt5=5;
            $LA5_0 = $this->input->LA(1);

            if ( ($LA5_0==$this->getToken('97')) ) {
                $LA5_1 = $this->input->LA(2);

                if ( ($LA5_1==$this->getToken('114')) ) {
                    $LA5_3 = $this->input->LA(3);

                    if ( ($LA5_3==$this->getToken('99')) ) {
                        $LA5_6 = $this->input->LA(4);

                        if ( ($LA5_6==$this->getToken('99')) ) {
                            $LA5_7 = $this->input->LA(5);

                            if ( ($LA5_7==$this->getToken('111')) ) {
                                $alt5=1;
                            }
                            else if ( ($LA5_7==$this->getToken('115')) ) {
                                $alt5=3;
                            }
                            else {
                                $nvae = new NoViableAltException("", 5, 7, $this->input);

                                throw $nvae;

                            }
                        }
                        else if ( ($LA5_6==$this->getToken('115')) ) {
                            $alt5=2;
                        }
                        else {
                            $nvae = new NoViableAltException("", 5, 6, $this->input);

                            throw $nvae;

                        }
                    }
                    else {
                        $nvae = new NoViableAltException("", 5, 3, $this->input);

                        throw $nvae;

                    }
                }
                else {
                    $nvae = new NoViableAltException("", 5, 1, $this->input);

                    throw $nvae;

                }
            }
            else if ( ($LA5_0==$this->getToken('115')) ) {
                $LA5_2 = $this->input->LA(2);

                if ( ($LA5_2==$this->getToken('103')) ) {
                    $alt5=4;
                }
                else if ( ($LA5_2==$this->getToken('101')) ) {
                    $alt5=5;
                }
                else {
                    $nvae = new NoViableAltException("", 5, 2, $this->input);

                    throw $nvae;

                }
            }
            else {
                $nvae = new NoViableAltException("", 5, 0, $this->input);

                throw $nvae;

            }
            switch ($alt5) {
                case 1 :
                    // texvc.g:
                    {
                    $this->matchString("arccot"); 



                    }
                    break;
                case 2 :
                    // texvc.g:
                    {
                    $this->matchString("arcsec"); 



                    }
                    break;
                case 3 :
                    // texvc.g:
                    {
                    $this->matchString("arccsc"); 



                    }
                    break;
                case 4 :
                    // texvc.g:
                    {
                    $this->matchString("sgn"); 



                    }
                    break;
                case 5 :
                    // texvc.g:
                    {
                    $this->matchString("sen"); 



                    }
                    break;

            }


            }


        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "MEDIAWIKI_FUNCTION_NAMES"

    function mTokens(){
        // texvc.g:
        // texvc.g:
        {
        $this->mT__16(); 


        }


    }



}
?>