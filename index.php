<?php

require_once("config.php");

//------------------------------------Carrega um usuario:
$root = new usuario();

$root->loadById(24);

echo $root; 
/*-----------------------------------Carrega uma lista de usuarios:
$lista = Usuario::getList();

echo json_encode($lista); */

/*----------------------------------Carrega uma lista de usuarios buscando pelo login:
$search = Usuario::search("BE");

echo json_encode($search);*/

/*----------------------------------Carrega um usuario usando login e senha:
$usuario = new Usuario();
$usuario->login("Betiza", "123445");

echo $usuario; */

/*----------------------------------Insere um usuario novo:
$aluno = new usuario("biscoito", "123");

/* -- não precisa mais-> $aluno->setDeslogin("teste");
                         $aluno->setDessenha("123"); 

$aluno->insert();

echo $aluno;  */

/*----------------------------------------------Update:

$usuario = new Usuario();

$usuario->loadById(3);

$usuario->update("Bolacha", "1234");

echo $usuario; */ 
?>