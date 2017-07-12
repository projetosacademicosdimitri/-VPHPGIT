<?php

/*

# Challenge - Backend Developer
Write a program that prints all the numbers from 1 to 100. However, for
multiples of 3, instead of the number, print "Linio". For multiples of 5 print
"IT". For numbers which are multiples of both 3 and 5, print "Linianos".
 
But here's the catch: you can use only one `if`. No multiple branches, ternary
operators or `else`.
 
# Requirements
* 1 if
* You can't use 'else', 'else if' or ternary
* Unit tests
* You can write the challenge in any language you want. Here at Linio we are
big fans of PHP, Kotlin and TypeScript
 
# Submission
You can create a public repository on your GitHub account and send the
link to us, or just send us a zip file.

Autor Dimitri Miranda 
*/


class Multiples{
	
	
 public static  $re = ' ';
	
public static function processMultiples($num)
{
	if ( ($num %3  == 0 && $num % 5 != 0 &&  self::$re = 'Linio') || ($num %5  == 0 && $num % 3 != 0 &&  self::$re = 'IT') || ($num %5  == 0 && $num % 3 == 0 &&  self::$re = 'Linianos')) {
	 
	 return self::$re;
}

		return $re = 'It is not multiple of 3 or 5';
}
	
	
}




