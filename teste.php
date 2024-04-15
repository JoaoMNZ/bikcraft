<?php
// Verifica se os campos foram preenchidos
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['nome']) && !empty($_POST['email'])) {
    // Informações do remetente
    $nome = $_POST['nome'];
    $email_cliente = $_POST['email'];
    
    // E-mail de destino
    $meu_email = "seu_email@example.com"; // Insira aqui o seu e-mail
    
    // Assunto do e-mail
    $assunto = "Novo contato do site";

    // Mensagem a ser enviada
    $mensagem = "Nome: " . $nome . "\n";
    $mensagem .= "Email: " . $email_cliente . "\n";

    // Envia o e-mail
    if (mail($meu_email, $assunto, $mensagem)) {
        echo "Obrigado por entrar em contato, $nome. Seu email foi enviado com sucesso!";
    } else {
        echo "Desculpe, ocorreu um erro ao enviar seu email.";
    }
} else {
    echo "Por favor, preencha todos os campos do formulário.";
}
?>