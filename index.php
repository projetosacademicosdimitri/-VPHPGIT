<?php

include_once 'classes/Multiples.php';


for($i=1; $i<= 100; $i++){
	
	echo $i.' => '.Multiples::processMultiples($i)."<br/>";

}