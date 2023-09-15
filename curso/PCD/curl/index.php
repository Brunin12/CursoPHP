


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>cURL</title>
  <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <h1 id="titulo">cURL</h1>
  <div id="container">

  
  <?php
/*cURL - permite que você se conecte e se 
comunique com diferentes tipos de servidores
usando diferentes tipos de protocolos como
protocolos https, ftp, gopher, telnet, dict,
file e ldap. libcurl também suporta 
certificados HTTPS, HTTP POST, HTTP PUT,
upload via FTP e muito mais.

Modo feio de entender: É o Ajax do PHP.
Faz basicamente a mesma coisa só que com
mais poderes.

Pode fazer GET ou POST, mandar e receber
dados diretamente a uma URL.

*/

/*EXEMPLO cURL GET

//SEMPRE INICIALIZAR
$ch = curl_init();

//APONTAR A URL DESEJADA
curl_setopt($ch, CURLOPT_URL,"https://viacep.com.br/ws/85802000/json/");

//ATIVAR RETORNO COMO STRING DO SERVIDOR
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

//EXECUTAR TODO O cURL
$retorno = curl_exec($ch);

//FECHAR O cURL
curl_close ($ch);

//MOSTRAR RETORNO VINDO
//echo "<pre>$retorno</pre>";

$dados = json_decode($retorno, true);
echo $dados["logradouro"];
*/

// EXEMPLO POST

//SEMPRE INICIALIZAR
$ch = curl_init();

//APONTAR A URL DESEJADA
curl_setopt($ch, CURLOPT_URL,"http://localhost/php/curso/curl/teste.php");

//OPÇÃO PARA DIZER QUE É POST (PADRÃO É GET)
curl_setopt($ch, CURLOPT_POST, 1);

//OS CAMPOS QUE QUEREMOS MANDAR VIA POST
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('valor1' => 'Bruno', 'valor2' => 'Programing 😋😎')));

//ATIVAR RETORNO COMO STRING DO SERVIDOR
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

//EXECUTAR TODO O cURL
$resultado = curl_exec($ch);

//FECHAR O cURL
curl_close ($ch);

//MOSTRAR RETORNO VINDO
echo "<pre>$resultado</pre>";
?>


  </div>
  <footer>
    <h2>Sobre</h2>
    <p>fala dev, hoje vamos estudar cURL<br> e veremos os conceitos de:<br>
      <strong>curl_init, curl_setopt, curl_exec, curl_close,<br> e entre outros</strong>
    </p>
  </footer>
</body>
<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

</html>