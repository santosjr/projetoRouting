<!DOCTYPE html>
<html>
<head>
	<title>Página de Login</title>
	<meta charset="utf-8">
</head>
<body>
	<form action="<?php echo $view['router']->path('login') ?>" method="post">
		<label>Email: </label>
		<input type="mail" name="email">

		<label>Senha: </label>
		<input type="password" name="senha">

		<input type="submit" name="Entrar">
	</form>
</body>
</html>