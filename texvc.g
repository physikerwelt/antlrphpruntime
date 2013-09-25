/*

 source: http://www.antlr.org/wiki/display/ANTLR3/1.+Lexer 

 An important feature here is such { texvc::\$tagMode }? predicates support

*/

lexer grammar texvc;
options {
    language=Php;
    }
/*lexer.mml l5-14
replacements:
let ([a-z_]+)  ?= \[
fragment \U\1 :\n\t(
'(\\?(.|\d+))' 
'\1' | 
*/
fragment SPACE :
	(' ' | '\t' | '\n' | '\r');
fragment ALPHA :
	('a'..'z' | 'A'..'Z');
fragment LITERAL_ID :
	('a'..'z' | 'A'..'Z');
fragment LITERAL_MN :
	('0'..'9');
fragment LITERAL_UF_LT :
	(',' | ':' | ';' | '?' | '!' | '\'');
fragment DELIMITER_UF_LT :
	('(' | ')' | '.');
fragment LITERAL_UF_OP :
	('+' | '..' | '*' | '=');
fragment DELIMITER_UF_OP :
	('/' | '|');
fragment BOXCHARS :
	('0'..'9' | 'a'..'z' | 'A'..'Z' | '+' | '..' | '*' | ',' | '=' | '(' | ')' | ':' | '/' | ';' | '?' | '.' | '!' | '\'' | '`' | ' ' | '\u0080'..'\u00FF');
fragment ABOXCHARS :
	('0'..'9' | 'a'..'z' | 'A'..'Z' | '+' | '..' | '*' | ',' | '=' | '(' | ')' | ':' | '/' | ';' | '?' | '.' | '!' | '\'' | '`' | ' ');
/*lexer.mml l15f
replacements:
let ([a-z_]+)  ?= 
fragment \U\1 :\n\t
"
'
\n\t
\n\t(
\nf
);\nf
I had to add an f at the end
*/
fragment LATEX_FUNCTION_NAMES :
	('arccos' | 'arcsin' | 'arctan' | 'arg' | 'cos' | 'cosh' | 'cot' | 'coth' | 'csc'| 'deg' | 'det' | 'dim' | 'exp' | 'gcd' | 'hom' | 'inf' | 'ker' | 'lg' | 'lim' | 'liminf' | 'limsup' | 'ln' | 'log' | 'max' | 'min' | 'Pr' | 'sec' | 'sin' | 'sinh' | 'sup' | 'tan' | 'tanh');
fragment MEDIAWIKI_FUNCTION_NAMES :
	('arccot' | 'arcsec' | 'arccsc' | 'sgn' | 'sen');

WHITESPACE : SPACE+;        
COMMAND  : '\\'   LATEX_FUNCTION_NAMES SPACE BOXCHARS+ SPACE ;  