<?php
include('../../includes/session.php');
include('../../includes/constants.php');
include('../../includes/header.php');
include('../../includes/connection.php');
$link = connect();
$result = execute($link,"SELECT * FROM categories");
?>
<h1>Category Manager</h1>
<a href="<?php echo $base_url;?>/modules/categories/add_category.php">Add New Category</a><br><br>
<?php
if(num_rows($result) > 0)
{
	?>
	<table width="100%;" border="1">
		<tr><td>ID</td><td>Name</td></tr>
		<?php
		while($cat = fetch($result))
		{
			?>
			<tr><td><?php echo $cat['id'];?></td><td><?php echo $cat['name'];?></td></tr>
			<?php
		}
		?>
	</table>
	<?php
}
?>
<?php include('../../includes/footer.php');?>