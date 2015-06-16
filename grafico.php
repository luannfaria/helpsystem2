<?php
// Consultar dados
$dados = array();





$pdo = new PDO('mysql:host=http://db4free.net/; dbname=helpsystemdb', 'root', 'clara02');
$sql = 'SELECT status, COUNT(*) as quantidade FROM atendimento GROUP BY status';
$stmt = $pdo->query($sql);

while ($obj = $stmt->fetchObject()) {
    switch ($obj->status) {
    case 'Aberto':
        $dados['aberto'] = $obj->quantidade;
        break;
    case 'Fechado':
        $dados['fechado'] = $obj->quantidade;
        break;
    }
}

echo gerar_grafico_torta($dados, '');
exit(0);

function gerar_grafico_torta($dados, $titulo, $largura = 250, $altura = 100) {

    // Gerando a URL dinamicamente
    $labels = array_keys($dados);
    $valores = array_values($dados);

    // Converter valores para porcentagens
    $soma = array_sum($valores);
    $percentual = array();
    foreach ($valores as $valor) {
        $percentual[] = round($valor * 100 / $soma);
    }

    $grafico = array(
        'cht'  => 'p3',
        'chs'  => $largura.'x'.$altura,
        'chd'  => 't:'.implode(',', $percentual),
        'chl'  => implode('|', $labels)
    );
   $url = 'https://chart.googleapis.com/chart?'.http_build_query($grafico, '', '&');
//    $url = 'https://chart.googleapis.com/chart?'.http_build_query($grafico, '', '&amp;');
  
    // Imprimindo o gráfico
    return sprintf('<img src="%s" width="%d" height="%d" alt="%s" />',
        $url, $largura, $altura, htmlentities($titulo, ENT_COMPAT, 'UTF-8')
       
    );
}
?>