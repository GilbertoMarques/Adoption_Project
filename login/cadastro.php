<?php 

include 'conexao.php';

error_reporting(0);

if (isset($_POST['submit'])) {
	$nomeusuario = $_POST['nomeusuario'];
	$email = $_POST['email'];
	$senha = ($_POST['senha']);
	$csenha= ($_POST['csenha']);

	if ($senha == $csenha) {
		$sql = "SELECT * FROM usuarios WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO usuarios (nomeusuario, email, senha)
					VALUES ('$nomeusuario', '$email', '$senha')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Cadastro de usuário concluído.')</script>";
				$nomeusuario = "";
				$email = "";
				$_POST['senha'] = "";
				$_POST['csenha'] = "";
			} else {
				echo "<script>alert('Algo deu errado.')</script>";
			}
		} else {
			echo "<script>alert('E-mail já existe.')</script>";
		}
		
	} else {
		echo "<script>alert('Senha não corresponde.')</script>";
	}
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" type="imagem/png" href="logo.png"/>
	<title>Cadastro | Focinho Feliz</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;" >Cadastre-se</p>
			<div class="input-group">
				<input type="text" placeholder="Nome Completo" name="nomeusuario" value="<?php echo $nomeusuario; ?>" required>
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Senha" name="senha" value="<?php echo $_POST['senha']; ?>" required>
            </div>
            <div class="input-group">
				<input type="password" placeholder="Confirme sua senha" name="csenha" value="<?php echo $_POST['csenha']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Efetuar Cadastro</button>
			</div>
			<p class="login-register-text">Já tem cadastro? <a href="index.php">Faça seu login</a></p>
		</form>
	</div>
</body>
</html>