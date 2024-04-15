<?php
// Verifica se os dados foram enviados por POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura os dados do formulário
    $tipo = $_POST['tipo'];
    $produto = $_POST['produto'];
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $cep = $_POST['cep'];
    $numero = $_POST['numero'];
    $logradouro = $_POST['logradouro'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    
    // Formata a mensagem a ser enviada por e-mail
    $mensagem = "Tipo: $tipo\n";
    $mensagem .= "Produto: $produto\n";
    $mensagem .= "Nome: $nome\n";
    $mensagem .= "Sobrenome: $sobrenome\n";
    $mensagem .= "CPF: $cpf\n";
    $mensagem .= "Email: $email\n";
    $mensagem .= "CEP: $cep\n";
    $mensagem .= "Número: $numero\n";
    $mensagem .= "Logradouro: $logradouro\n";
    $mensagem .= "Bairro: $bairro\n";
    $mensagem .= "Cidade: $cidade\n";
    $mensagem .= "Estado: $estado\n";

    // Email de destino
    $meu_email = "joao.menezes21@outlook.com"; // Insira aqui o seu e-mail
    $assunto = "Novo pedido de orçamento";

    // Envia o e-mail
    if (mail($meu_email, $assunto, $mensagem)) {
        echo "Obrigado por solicitar um orçamento, $nome. Seu pedido foi enviado com sucesso!";
    } else {
        echo "Desculpe, ocorreu um erro ao processar o seu pedido.";
    }
} else {
    echo "Por favor, preencha o formulário corretamente.";
}
?>