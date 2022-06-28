 <?php 
    include_once('conexao.php');
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $data = $_POST['data'];
    $cep = $_POST['cep'];
    $rua = $_POST['rua'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $uf = $_POST['uf'];
    $mensagem1 = $_POST['mensagem1'];
    $mensagem2 = $_POST['mensagem2'];
    $animal = $_POST['animal'];

    $result_cad_form = "INSERT INTO cad_form (nome, email, telefone, data, cep,rua, bairro, cidade, uf, mensagem1, mensagem2, animal) VALUES ('$nome', '$email', '$telefone', '$data', '$cep', '$rua', '$bairro', '$cidade', '$uf', '$mensagem1', '$mensagem2', '$animal' NOW())";
    $result_cad_form=mysqli_query($conn ,$result_cad_form)
?>