<?php

//hw 1 -guess game
/** 

function gword($givenword){


if((str_shuffle($givenword)) == 'octopus'){
    echo "you won";
}
else{
    echo "try again!";
}
}
gword('puocots');

*/

//hw 2- mail validation
/** 
$mail='abcmngmailcom';

if(strpos($mail,'@')){
    if(strpos($mail,'.com')){
        echo "this is a valid email";
    }
    else {
        echo ".com is missing";
}
}
else{
    echo "this is invalid mail";
}

*/



 
//hhw 3- file extention check

/** 
$img='checkimg.jpg.xlxs.png';

$imgcheck=explode('.',$img);

if(((end($imgcheck))=='jpg')||((end($imgcheck))=='png')){

    echo "the extention is valid";
}
else{

    echo "the extention is invalid";
}
*/

//hw 4- character length 

/** 

$paragraph='bangladesh';

if ((strlen($paragraph)>5) && (strlen($paragraph)<8)){
    echo "this is acceptable";
}
else {
    echo "not acceptable";
}

*/
