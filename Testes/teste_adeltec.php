<div> Seja Bem vindo(a) <?php echo [nome];

$nome = [nome];

$check_sql =  "SELECT nome FROM curriculum_dados_pessoais WHERE nome = '[nome]'";

sc_select(rs, $check_sql;

foreach ($rs as $resultadoTela) {

    print_r($resultadoTela[nome]);
	
	}

$sql = "select nome from curriculum_dados_pessoas where nome = '$nome'";
	$rs = mysqli_query($mysqli_connection,$sql);
	$numRows = mysqli_num_rows($rs);

  if ($numRows > 0) {
    echo "nome duplicado";
  } else {
//-----------------//

$sql = "INSERT INTO teste VALUES ('', '$nome')";
if (mysqli_query($sql)) {
      echo "Seja bem vindo(a) " . $nome ;
}
else {
	  $error_message = "Erro de conexão";
      sc_error_message($error_message);
}
mysqli_close($mysqli_connection);
}
  }

//teste para o lookup
sc_lookup(dataset, "SELECT cod_curriculum_pk, nome, sobrenome from curriculum_dados_pessoas");

{cod_curriculum_pk} = {dataset[0][0]};
{nome} = {dataset[0][1]};
{sobrenome } = {dataset[0][2]};


?>


<style>
	.card {
		border-radius: 20px 20px 0px 0px;
	}
	.boaVinda {
		text-align:r;
	}
	background-color: #eceaea;
</style>

//exemlo 1
	<h5 id = "BemVindo">
										Olá 
										
		<?php

				sc_lookup(dataset, "SELECT cod_curriculum_pk, nome, sobrenome from curriculum_dados_pessoas WHERE usr_login_fk = " . [usr_login]);

{nome} = explode(" ", {dataset[0][1]});
echo {nome[0]};
           ?>
										, bem vindo ao EBR
										</h5>
							</div>

//exemplo 2 

<div class="col-sm-3 boaVinda"> <?php    

       $sql = "SELECT nome 
               FROM curriculum_dados_pessoas
               WHERE nome = '".[myName]."' ";

      sc_lookup(Dataset, $sql); 
     echo '.<p>bem vindo </p>.' . $name = {Dataset[0][0]};
?>  </div>