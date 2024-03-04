<?php
if (isset($_GET['arquivo'])) {
    $arquivo = urldecode($_GET['arquivo']);

    // Verifica se o arquivo é um PDF
    if (pathinfo($arquivo, PATHINFO_EXTENSION) == 'pdf') {
        // Define o cabeçalho para indicar que o conteúdo é um arquivo PDF
        header('Content-Type: application/pdf');
        header('Content-Disposition: inline; filename="' . basename($arquivo) . '"');
        header('Content-Transfer-Encoding: binary');
        header('Accept-Ranges: bytes');

        // Lê o conteúdo do arquivo e envia para o navegador
        readfile($arquivo);
        exit;
    }
}

// Se o arquivo não for encontrado ou não for um PDF, exibe uma mensagem de erro
echo 'Erro: Arquivo PDF não encontrado.';
?>
