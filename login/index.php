<?php 

include 'conexao.php';

session_start();

error_reporting(0);

if (isset($_SESSION['nomeusuario'])) {
    header("Location: ../inicio/index.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$senha = ($_POST['senha']);

	$sql = "SELECT * FROM usuarios WHERE email='$email' AND senha='$senha'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['nomeusuario'] = $row['nomeusuario'];
		header("Location: ../inicio/index.php");
	} else {
		echo "<script>alert('E-mail ou senha está errado.')</script>";
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
	<title>Login | Focinho Feliz</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Senha" name="senha" value="<?php echo $_POST['senha']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
			<p class="login-register-text">Não tem conta? <a href="cadastro.php">Cadastre-se</a></p>
		</form>
	</div>
</body>
</html>