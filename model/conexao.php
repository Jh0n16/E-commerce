<?php
    // Aqui passamos os dados do banco. como qual sintax, local e nome
    $banco_de_dados = 'mysql:host=localhost;dbname=ecommerce';

    // Indicando qual é o usuário que terá acesso
    $user = 'root';

    // Definindo a senha do banco.
    $password = '';

    // Para tratar os erros, caso aconteça, usaremos o try... catch que é usado na linguagem.
    try {
        // Primeiro criamos a conexão passando, o nome do banco de dados, o nome e a senha de usuário.
        $conexao = new PDO($banco_de_dados, $user, $password);
        
        // Agora usaremos o setAttribute para definir um atributo a conexão. Nesse caso estamos dizendo que
        // O atributo que será modificado é o modo de tratamento de erros e o atributo que estamos modificando
        // é uma exceção que será lançada sempre que ocorrer um erro.
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(PDOException $erro){
        // Passamos a mensagem de erro:
        echo "Erro: " . $erro->getMessage();
    }

?>