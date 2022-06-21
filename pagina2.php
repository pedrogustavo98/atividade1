<?php
    $nome = $_POST['nome'];
    $data_nascimento = $_POST['data_nascimento'];
    $idade = $_POST['idade'];

    echo"<table border=1>";
        echo"<thead>";
            echo"<th>Nome</th>";
            echo"<th>Data Nascimento</th>";
            echo"<th>Idade</th>";
        echo"</thead>";
    echo"<tr>";
        echo"<td>$nome</td>";
        echo"<td>$data_nascimento</td>";
        echo"<td>$idade</td>";
    echo"</tr>";
echo"</table>";
