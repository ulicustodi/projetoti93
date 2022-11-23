<?php
    include 'conecta.php';
    // criando consulta SQL
    $consultaSql = "SELECT * FROM cliente where deted is null order by ";

    // buscando e listando os dados da tabela (completa)
    $lista = $conn->query($consultaSql);

    // separar em linhas
    $row = $lista->fetch();

    // retornando o número de linhas
    $num_rows = $lista->rowCount();
    // buscar cliente por id 
    $nome ="xpto"
    $cpf ="45631"
    $cod =0;
    if(isset($_GET['codedit']))
    
    {
     $cliente =$conn->query "select * from cliente where cod_cliente = ". ($_GET['codedit']->fetch();
     $nome = $cliente['nome']
     $cpf =$cliente['cliente']
     $cod = $_GET['codedit']
    }
      // arquivando registro de clientes 
      if(isset($_GET['codarq']))
      {
        $cliente =$conn->query(
            'update cliente set delete'
        )
      }
      
       // insere cliente na tabela 
    if(isset($_POST['inserir']))
    {
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $insertSql = "insert cliente (nome, cpf) values('$nome','$cpf')";
        $resultado = $conn->query($insertSql);
        header('location: cliente.php');
    }
?>     

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes(<?php echo $num_rows?>)</title>
    <link rel="stylesheet" href ="css/style.css">
</head>

<body>
    <form action="#" method="post">
        <div hidden>
            <label for="cod">Código
                <input type="text" name="cod" value id=""></label>
        </div>
        <div class="campo">
            <label for="nome">Nome
                <input type="text" name="nome" id=""></label>
        </div>
        <div class="campo">
            <label for="cpf">CPF
                <input type="number" name="cpf"  id=  value=""></label>
                </div>
        <div>
            <button type="submit" 
            name="<?php echo $cod==0?'Inserir':'alterar'?>">
            Enviar
        </button>
        </div>
        <div class="campo">
            <label for="cpf">Turno
                <select name="turno" id="">
                    <option value="manha">Manhã</option>
                    <option value="tarde">Tarde</option>
                    <option value="noite">Noite</option>
                </select>
            </label>
        </div>
    </form>   
    <table class="tabelinha">
            <thead>
                <th>Cod</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>colspan="2">Açoes</th>

                </th>
            </thead>
        
            <tbody>
                <?php do {?>
                    <tr>
                        <td><?php echo $row['cod_cliente'];?></td>
                        <td><?php echo $row['nome'];?></td>
                        <td><?php echo $row['cpf'];?></td>
                        <td><?php echo $row['cod_cliente'];?></td>
                        <td><?php echo $row['cod_cliente'];?></td>
                        <td><a href="cliente.php?codedit=<?php $row['cod_cliente'];?>">ec
                    </tr>
                <?php } while ($row = $lista->fetch())?>
            </tbody>
        </table>
</body>
</html>