<?php

require_once("config.php");

//====================================================
// $sql = new Sql();
// $usuarios = $sql->select("SELECT * FROM tb_usuarios ");
// echo json_encode($usuarios);

//==============================================================
// carrega 1 usuário 
// $root = new Usuario();
// $root->loadById(3);
// echo $root;

//==============================================================
// // carrega uma lista de usuarios
// $list = Usuario::getList();
// echo json_encode($list);

//==============================================================
// // carrega uma lis de usuários buscando pelo login 
// $search = Usuario::search("jo");
// echo json_encode($search);

//==============================================================
// Carrega um usuário usando o login e a senha 
// $usuario = new Usuario();
// $usuario->login("root","alter");
// $usuario->login("root","altereee"); // Acionando erro 
// echo $usuario;

//==============================================================
// criando um novo usuarios
// $aluno = new Usuario("aluno", "@aluno");
// $aluno->insert();
// echo $aluno;

//==============================================================
// Atualizando!
$usuario = new Usuario();
$usuario->loadById(8);
$usuario->update("professor", "alteradoupdate");
echo $usuario;


?>