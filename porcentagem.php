<?php

if(isset($_POST['valor_conta'], $_POST['opcao'], $_POST['calcular'], $_POST['gorj'], $_POST['tot'] )){
    $valorconta = $_POST["valor_conta"];
    $opcao = $_POST['opcao'];
    $porcentagem = 0;
    $resp = 0;
    $_POST['calcular'] = $resp;
    $_POST['gorj'] = $_POST['calcular'];
    $valorTotal = $valorconta + $resp;
    $_POST['tot'] = $valorTotal;

    switch ($opcao) {
        case 'a':
            $porcentagem = 10;
            function porcentagem1($valorconta,$porcentagem){
                return(($valorconta/100) * $porcentagem);
            }
            $resp = porcentagem1($valorconta,$porcentagem);
            break;
         case 'b':
            $porcentagem = 8;
            function porcentagem2($valorconta,$porcentagem){
                return(($valorconta/100) * $porcentagem);
            }
            $resp = porcentagem2($valorconta,$porcentagem);
            break;
        case 'c':
            $porcentagem = 5;
            function porcentagem3($valorconta,$porcentagem){
                return(($valorconta/100) * $porcentagem);
            }
            $resp = porcentagem3($valorconta,$porcentagem);
            break;
        case 'd':
            $porcentagem = 2;
            function porcentagem4($valorconta,$porcentagem){
                return(($valorconta/100) * $porcentagem);
            }
            $resp = porcentagem4($valorconta,$porcentagem);
            break;
        default:
            echo "Operação Inválida";
            break;
    }

    $valorTotal = $valorconta + $resp;
    $_POST['tot'] = $valorTotal;

}



?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/estilo.css">
	<title>soma valores</title>
    
</head>
<body>
    <div class="div1" >
            <h1>Calculadora de Gorjeta</h1>

        <form action="porcentagem.php" method="post"> 
            <label for="valor_conta">Valor da conta:</label>
            <br>
            <input class="valordaconta" type="number" name="valor_conta" value="valor_conta" placeholder="R$ 0,00" required>
            <br><br>

            
            <label for="opcao">Qualidade do Serviço:</label>
            <br>
            <select name="opcao" required>
                <option value="a">Excelente - 10%</option>
                <option value="b">Ótimo - 8% </option>
                <option value="c">Bom - 5%</option>
                <option value="d">Ruim - 2%</option>
            </select>
            <br><br>

            <input class="calc" type="submit" name="calcular" value="Calcular Gorjeta">
            <br><br>

            <label for="valorgorjeta">Valor da Gorjeta:</label>
            <br>
            <input class="vg" type="text" name="gorj" placeholder="R$ 0,00" value="<?php echo @$resp ?>">
            
                
            <br><br>

            <label for="total">Valor Total:</label>
            <br>
            <input class="vt" type="text" name="tot" placeholder="R$ 0,00" value="<?php echo @$valorTotal ?>">
        
            <br><br><br>
          
        </form>

    </div>

	<p>Imagem de <a href="https://br.freepik.com/vetores-gratis/fundo-gradiente-preto-com-cubos_20253075.htm#query=%C3%A7fundo%20tecnol%20ogico%20preto&position=7&from_view=search&track=ais">Freepik</a></p>

</body>
</html>
