<?php
// Conexão com o banco de dados
$servername = "localhost"; // substitua pelo endereço do seu servidor MySQL
$username = "seu_usuario"; // substitua pelo nome de usuário do seu banco de dados
$password = "sua_senha"; // substitua pela senha do seu banco de dados
$dbname = "seu_banco_de_dados"; // substitua pelo nome do seu banco de dados

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Obtém os dados do formulário
$nome = $_POST['nome'];
$cidade = $_POST['cidade'];
$serie = $_POST['serie'];

// Insere os dados na tabela Escola
$sql = "INSERT INTO Escola (nome, cidade, serie) VALUES ('$nome', '$cidade', '$serie')";

if ($conn->query($sql) === TRUE) {
    echo "Registro cadastrado com sucesso";
} else {
    echo "Erro ao cadastrar registro: " . $conn->error;
}

$conn->close();
?>
