<?php

// Premiere ligne

function hello() {
    echo "Hello World!";
}

//Deuxieme ligne
hello();


//Troisieme ligne

function maFonctionParam($fname, $lname = 5) {
    echo $fname;
    return $lname;
}
maFonctionParam("truc",5);