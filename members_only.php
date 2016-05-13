<?php

if (!isset($_SERVER['PHP_AUTH_USER']))
{
    header("WWW-Authenticate: Basic realm=''Espace membres'");
    header('HTTP/1.0 401 Unauthorized');
}
else
{
	if ($_SERVER['PHP_AUTH_USER'] == "nyt" && $_SERVER['PHP_AUTH_PW'] == "nyt")
	{
?>
		<html>
			<body>
				hey me
			<br />
			<?php
			echo "<img src='data:image/png;base64,";
			$file = base64_encode(file_get_contents("./img/firefox2.png"));
			echo $file;
			echo "'";
			?>
>
			</body>
		</html>
<?php
	}
	else
	{
		header("WWW-Authenticate: Basic realm=''Espace membres''");
	    header('HTTP/1.0 401 Unauthorized');
?>
<html><body>Forbidden</body></html>
<?php
}
}
?>
