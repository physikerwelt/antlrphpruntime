/*

 source: http://www.antlr.org/wiki/display/ANTLR3/1.+Lexer 

 An important feature here is such { texvc::\$tagMode }? predicates support

*/

lexer grammar texvc;
options {
    //language=Php;
    }
/*lexer.mml l5-14
replacements:
let ([a-z_]+)  ?= 
fragment \U\1 :\n\t
]\n
];\n
'(\\?(.|\d+))' ?
\1
*/
fragment SPACE :
	[ \t\n\r];
fragment ALPHA :
	[a-zA-Z];
fragment LITERAL_ID :
	[a-zA-Z];
fragment LITERAL_MN :
	[0-9];
fragment LITERAL_UF_LT :
	[,:;?!\'];
fragment DELIMITER_UF_LT :
	[().];
fragment LITERAL_UF_OP :
	[+-*=];
fragment DELIMITER_UF_OP :
	[/|];
fragment BOXCHARS :
	[0-9a-zA-Z+-*,=():/;?.!\'` \128-\255];
fragment ABOXCHARS :
	[0-9a-zA-Z+-*,=():/;?.!\'` ];
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

COMMAND  : '\\'   LATEX_FUNCTION_NAMES SPACE BOXCHARS+ SPACE ;  

/*WS  :  //{ texvc::\$tagMode }?=>
       (' '|'\r'|'\t'|'\u000C'|'\n') //{$channel=99;}
    ;*/