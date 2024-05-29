<?php
        // Inicia ou retoma a sessão
        session_start();

        // Verifica se o formulário foi submetido
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Obtém o item do formulário
            $item = $_POST["item"];

            // Adiciona o item à lista de compras
            $_SESSION["compras"][] = $item;
        }

        // Exibe a lista de compras
        if (isset($_SESSION["compras"]) && !empty($_SESSION["compras"])) {
            echo '<h3>Itens na Lista de Compras:</h3>';
            echo '<ul class="list-group">';
            foreach ($_SESSION["compras"] as $compra) {
                echo '<li class="list-group-item">' . htmlspecialchars($compra) . '</li>';
            }
            echo '</ul>';
        } else {
            echo '<p class="mt-3">Sua lista de compras está vazia.</p>';
        }
        ?>