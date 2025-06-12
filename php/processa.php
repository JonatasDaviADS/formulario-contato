<?php>
// processa.php - Aqui temos o arquivo principal por receber e tratar os dados do formulário

// verifica se os dados foram enviados via método POST
if ($_SERVER[" REQUEST_METHOD"] == "POST"){

    // obtém os dados enviados e com o uso do "trim" remove os espaços
    $nome = trim($_POST["nome"]);
    $email= trim($_POST["email"]);
    $mensagem= trim($_POST["mensagem"]);

    // neste pedço do código verifica se existe algum espaço vazio
    if (empty($nome)) || empty($email) || empty($mensagem){
        echo "Por gentileza, preencha os campos solicitados.";
        exit;
    }

    // valida o e-mail com filtro do PHP
    if (!filter_var($email, FILTER_VALIDADE_EMAIL)){
        echo "E-mail inválido. Preencha com um endereço válido"
        exit;
    }

    // Se chegou aqui, os dados são válidos. Aqui você poderia salvar em banco ou enviar por e-mail.
    // Para fins de aprendizado, apenas exibimos uma mensagem formatada.
    echo "<h1>Mensagem Rcecebida com Sucesso!</h1>";
    echo "<p><strong>Nome:</strong>" . htmlspecialchars($nome) . "</p>";
    echo "<p><strong>E-mail:</strong>" . htmlspecialchars($email) . "</p>";
    echo "<p><strong>Mensagem:</strong>" . nl2br(htmlspecialchars($mensagem)) . "</p>";
} else {
    // se alguém tentar acessar o arquivo diretamente semusar o formulário
    echo "Acesso inválido.";
}
</php>

// Após a construção do código. Faça o teste