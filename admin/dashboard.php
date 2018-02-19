<?php
session_start();
if(!isset($_SESSION['admin']))
{
	redirect('index.php');
}
function redirect($page)
{
	echo '<script type="text/javascript">
		window.location = "'.$page.'";
	</script>';
}
echo $_SESSION['admin'];
?>