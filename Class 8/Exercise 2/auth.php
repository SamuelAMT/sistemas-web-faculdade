<?php

//inicia a sessão

session_start();

//registra os dados na sessão

$_SESSION['nome'] = $_POST['txtNome'];

$_SESSION['endereco'] = $_POST['txtEndereco'];

echo "Eu sou a página 2<p>";

//imprime os dados do da sessão

echo "$_SESSION[nome]<p>";

echo "$_SESSION[endereco]<p>";

//link para uma outra página

echo "<a href = 'print_form.php'> Clique aqui</a>";

?>