<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulário HTML - Cadastro de Clientes</title>

        <!-- Bootstrap -->
            <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
    <div class="container">
        <div class="row">
        <div class="col-md-12">
        <form action="processa_cliente.php" method="post">
        <div class="row">
        <div class="col-md-8">
        <div class="card">
        <div class="card-header">
        <h3>Cadastro de Clientes</h3>
    </div>

    <div class="card-body">
        <div class="form-group">
        <label for="nome_cliente">Nome
        <input type="text" class="form-control" id="nome_cliente" name="nome_cliente" placeholder="Seu nome" required>
    </div>

    <div class="form-group">
        <label for="cpf_cliente">CPF
        <input type="text" class="form-control" minlength="11" maxlength="11" id="cpf_cliente" name="cpf_cliente" placeholder="Seu CPF" title="Digite apenas números" required>
    </div>

    <div class="form-group">
        <label for="email_cliente">Endereço de E-mail</label>
        <input type="email" class="form-control" id="email_cliente" name="email_cliente" aria-describedby="emailHelp" placeholder="Seu e-mail" required>
        <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.
    </div>

    <div class="form-group">
        <label for="data_nascimento_cliente">Data de Nascimento <input type="date" class="form-control" id="data_nascimento_cliente" name="data_nascimento_cliente" placeholder="Sua data de nascimento" required>
    </div>

    <div class="form-group text-center">
        <button type="submit" class="btn btn-primary">Enviar
        </div>
        </div>
        </div>
        </div>
        </div>
        </form>
        </div>
        </div>
        </div>

      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

      </body>
      </html>
      
      <?php
/***VALIDAÇÃO DOS DADOS RECEBIDOS DO FORMULÁRIO ***/
if($_REQUEST['nome_cliente'] == ""){
	echo "O campo Nome não pode ficar vazio.";
	exit;
}

if(strlen($_REQUEST['cpf_cliente']) != 11){
	echo "O campo CPF precisa ter 11 caracteres.";
	exit;
}

if(!stripos($_REQUEST['email_cliente'], "@") || !stripos($_REQUEST['email_cliente'],".")){
	echo "O campo E-mail não é válido.";
	exit;
}

if($_REQUEST['data_nascimento_cliente'] == ""){
	echo "O campo Data de Nascimento não pode ficar vazio.";
	exit;
}
/***FIM DA VALIDAÇÃO DOS DADOS RECEBIDOS DO FORMULÁRIO ***/


/***CONEXÃO COM O BD ***/
//Constantes para armazenamento das variáveis de conexão.
define('HOST', '192.168.52.128');
define('PORT', '5432');
define('DBNAME', 'minimundo');
define('USER', 'postgres');
define('PASSWORD', '159753');

try {
	$dsn = new PDO("pgsql:host=". HOST . ";port=".PORT.";dbname=" . DBNAME .";user=" . USER . ";password=" . PASSWORD);
} catch (PDOException $e) {
	echo 'A conexão falhou e retorno a seguinte mensagem de erro: ' .$e->getMessage();
}
/*** FIM DOS CÓDIGOS DE CONEXÃO COM O BD ***/


/***PREPARAÇÃO E INSERÇÃO NO BANCO DE DADOS ***/
$stmt = $dsn->prepare("INSERT INTO 
							cliente(nome_cliente, cpf_cliente, email_cliente, data_nascimento_cliente)
							VALUES (?, ?, ?, ?)
						");

$resultSet = $stmt->execute([$_REQUEST['nome_cliente'], $_REQUEST['cpf_cliente'], $_REQUEST['email_cliente'], $_REQUEST['data_nascimento_cliente']]);

if($resultSet){
	echo "Os dados foram inseridos com sucesso.";
}else{
	echo "Ocorreu um erro e não foi possível inserir os dados.";
}

//Destruindo o objecto statement e fechando a conexão
$stmt = null;
$dsn = null;

