<?php

//inicia a sessão

session_start();

//verifica se existe uma sessão registrada.

if(!empty($_SESSION['nome']) and !empty($_SESSION['endereco'])){

echo "Eu sou a página 3 <p>";

//imprime os dados da página anterior

echo "$_SESSION[nome]<p>";

echo "$_SESSION[endereco]<p>";

echo "<a href='handle_session.php'>Próxima página</a>";

}

else{

echo "Nâo foram registrados dados na sessão!";

}

?>