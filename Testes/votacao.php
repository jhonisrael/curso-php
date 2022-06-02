<HTML>
<HEAD>
<TITLE>votação</TITLE>
</HEAD>
<BODY>
<FONT SIZE="5">Qual a sua base de dados preferida?</FONT><BR>
<FORM NAME="votação" ACTION="/curso-php/exercicio.php?dir=Testes&file=votacao" METHOD="POST">
<INPUT TYPE="radio" NAME="escolha" VALUE="1">MySQL<BR>
<INPUT TYPE="radio" NAME="escolha" VALUE="2">msSQL<BR>
<INPUT TYPE="radio" NAME="escolha" VALUE="3">PostgreSQL<BR>
<INPUT TYPE="radio" NAME="escolha" VALUE="4">ODBC<BR>
<button type="submit">Submit</button>
</FORM>
</BODY>
</HTML>


<?php

if ($escolha = $_POST['escolha']) { // Verifica se foi inserido um voto e prossegue em frente no caso de verdade

// Variáveis a serem alteradas

// $mysql_host = "localhost"; // local do servidor MySQL
// $mysql_user = ""; // utilizador do MySQL
// $mysql_pass = "root"; // senha do utilizador do MySQL
$mysql_dtbs = "votacao"; // base de dados onde a tabela foi criada

$num_resp = ""; // número de opções na tua votação
$pergunta = "$escolha"; // pergunta da votação

// Nada mais a ser alterado

// $mysql_conx = mysqli_connect($mysql_host,$mysql_user,$mysql_pass);
$mysqli_connection = new MySQLi('localhost', 'root', '', 'votacao');
if($mysqli_connection->connect_error){
   echo "Desconectado! Erro: " . $mysqli_connection->connect_error;
}else{
//    echo "Conectado!";
}
// ligação ao MySQL

$radio = '$num_resp + 1';
// para uso posterior

mysqli_select_db($mysqli_connection, $mysql_dtbs);
// seleciona a base de dados

// aqui começa todo o trabalho do PHP para actualizar a base de dados


//$query_upd = "SELECT * FROM votacao WHERE id=$escolha";
$query_upd = sprintf("SELECT id, votos FROM votacao");
$resul_upd = mysqli_query($mysqli_connection, $query_upd);
// aqui o PHP selecciona apenas os registos que coincidem com a escolha, neste 
// caso so uma opção
$dados = mysqli_query($mysqli_connection,$query_upd);
$linha = mysqli_fetch_assoc($dados);
// calcula quantos dados retornaram
$total = mysqli_num_rows($dados);

$obj_upd = mysqli_fetch_object($resul_upd);
// o comando mysql_fetch_object() separa os resultados de uma query por colunas
// neste caso, $obj_upd -> descrição da opção que o utilizador votou

$vot_upd = $obj_upd->votos;
$vot_upd++;
// separa só os votos e adicinona mais um voto

$upd_upd = "UPDATE votacao SET votos=$vot_upd WHERE id=$escolha";
mysqli_query($mysqli_connection, $upd_upd);
// atualizou a base de dados


// Agora o PHP fará a pesquisa na base de dados e retornará as opções, seus 
// respectivos votos, total de votos e a sua escolha.
echo "<H3>" . $pergunta . "</H3>";

for($i=1;$i<$radio;$i++) {

$query[$i] = "SELECT * FROM votação WHERE id=$i";
$resul[$i] = mysqli_query($mysqli_connection, $query[$i]);
$objet[$i] = mysqli_fetch_object($resul[$i]);

/* echo "<FONT FACE="Verdana" SIZE="1"> <B>" . $objet[$i]->opcao . "</B> " . $objet[$i]->descricao . "<B> " . $objet[$i]->votos . "</B><BR>";

$tot_vt += $objet[$i]->votos;

// tudo isto serve para requisitar o resultado de cada opção e exibir no écran

}
echo "<FONT SIZE="1"><B>Total de votos:</B>" . $tot_vt . "&nbsp;&nbsp;&nbsp;<B>Sua Escolha</B>:" . $escolha . "</FONT></FONT>"; */
} 
}
?>