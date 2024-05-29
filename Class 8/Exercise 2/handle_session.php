<?php

//inicia a sessão

session_start();

echo "Eu sou a página 4 <p>";

//imprime os dados da página anterior

echo "$_SESSION[nome]<p>";

echo "$_SESSION[endereco]<p>";

//encerra a sessão

session_destroy();

echo "<a href = 'print_form.php'> Volta para página 3 </a>";

?>