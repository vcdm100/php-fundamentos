<?php

//Tipos dados escalares

$nome = "Victor Cláudio";
$idade = 28;
$casada = true;
$preco = 39.90;

echo gettype($nome);
echo "<br>";
echo gettype($idade);
echo "<br>";
echo gettype($casada);
echo "<br>";
echo gettype($preco);
echo "<br>";

//===========================================================

echo "<br> A variavel 'nome' é do tipo: ";
echo gettype($nome);
echo "<br>";

//===========================================================

$nome = false;

echo "<br> A variavel 'nome' é do tipo: ";
echo gettype($nome);
echo "<br>";

//===========================================================

echo "<br>";
var_dump($nome);
echo "<br>";
var_dump($idade);
echo "<br>";
var_dump($casada);
echo "<br>";
var_dump($preco);
echo "<br>";

// ou 

echo "<br>";
var_dump($nome, $idade, $casada, $preco);


/* RESULTADO - SAÍDA

string
integer
boolean
double

A variavel 'nome' é do tipo: string

A variavel 'nome' é do tipo: boolean

bool(false)
int(28)
bool(true)
float(39.9)

bool(false) int(28) bool(true) float(39.9) 

*/