<?
include 'conecta.php';
// criando consulta sql
$consulta = "SELECT * FROM cliente order by asc, cod_cliente asc"; // negocio 
// buscando e listando os dados da tabela (completa)
$lista =$conn->query($consultasql);
// separar linhas
$row = $lista->fetch();
// retornando o numero de linhas 
$num_rows =$lista->rowCount();

// buscar cliente por id
$nome = "";
$cpf  ="";
$cod = 0;
if(isset($_GET['codedit']))
{
    $cliente =$conn->query(
    "select * from cliente where cod_cliente = ".$_GET['codedit'])->fetch();
    $nome = $cliente['nome'];
    $cpf = $cliente['cpf']
    $cod =$_get['codedit'];
    
    }
// atualiza o registro de cliente
if(isset($_POST))['alterar']))
{

    $cod = $_POST['cod'];
    $nome=$_POST['nome'];
    $cpf=$_POST['nome'];
    $resultado=$conn->query("udate cliente set nome = 'nome',cpf = '$cpf'where cod_cliente =$cod");
    header('location:cliente.php');

} 
// insere cliente na tabela 
if(isset($_POST['inserir']))
{
    $nome= $_POST['cod']
    $cpf=$_POST['nome']
    $insertsql="insert cliente (nome, cpf)values('$nome',$cpf');";
    $resultado = $conn->query($insertsql);
    header('location:cliente.php');
}  




?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cliente(<php echo $num_rows?>)</title>
    <link rel="styleheet" heref="css/style.css">
</head>
<body>
   <form action="cliente.php" method="post">
    <div hidden>
        <label for="cod">codigo
            <input type="text" name="nome" id="" value="<?php echo $cod;?>"></label>
            </div>
            <div class="campo">
            <label for="cpf">CPF
                <input type="number" name="cpf" id="" value="<?php echo $cpf;?>"></label>
                </div>

                <div class="campo">
               <button type="submit"
               name="<?php echo $cod==0?'inserir':'alterar' ?>">
            
            </button>


           </form>  
              <table class="tabelinha">
              <thead>
                <th>Cod</th>
                <th>nome</th>
                <th colspan="2">Açoes</th>
            </thead>

             <tbody>
                <?php do {?>
                    <tr>
                        <td><?php echo $row['cod_cliente'];?></td>
                        <td><?php echo $row['nome'];?></td>
                        <td><?php echo $row['cpf'];?></td>
                        <td><a href="cliente.php?codedit=<?php echo $row['cod_cliente'];?>">Editar</a></td>
                        <td><a href="cliente.php?codarq=<?php echo $row['cod_cliente'];?>">Arquivar</a></td>
                </tr>
                <?php } while ($row = $lista->fetch())?>
                </tbody>
              </table>
                </table>
              </body>
                </html>
