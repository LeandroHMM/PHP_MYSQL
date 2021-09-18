<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";

    $conn = new mysqli($host, $user, $pass, $db);


    // ASSUNTO DA AULA  

    $nome = "Suporte de microfone";
    $descricao = "O suporte é novo e veio da Irlanda";

    $stmt = $conn->prepare("INSERT INTO itens (nome, descricao) VALUES (?, ?)");

    $stmt->bind_param("ss", $nome, $descricao); // s = string. i = integer, d = double

    $stmt->execute();

