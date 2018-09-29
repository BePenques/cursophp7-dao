<?php

require_once("config.php");

//carrega um usuario:
/*$root = new usuario();

$root->loadById(1);

echo $root; */

//carrega uma lista de usuarios
/*$lista = Usuario::getList();

echo json_encode($lista); */

//Carrega uma lista de usuarios buscando pelo login
/*$search = Usuario::search("BE");

echo json_encode($search);*/

/*carrega um usuario usando login e senha
$usuario = new Usuario();
$usuario->login("ROOT", "1234");

echo $usuario; */

//INSERT USUARIO NOVO
$aluno = new usuario();

$aluno->setDeslogin("teste");
$aluno->setDessenha("123");

$aluno->insert();

echo $aluno;


?>