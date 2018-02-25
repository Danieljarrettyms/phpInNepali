<?php
include('../../includes/session.php');
include('../../includes/constants.php');
include('../../includes/header.php');
include('../../includes/connection.php');
$link = connect();
$result = execute($link,"SELECT * FROM categories");
?>
<h1>Category Manager</h1>
<a href="<?php echo $base_url;?>modules/categories/add_category.php">Add New Category</a><br><br>
<?php
if(num_rows($result) > 0)
{
	?>
	<table width="100%;" border="1">
		<tr><td><b>ID</b></td><td><b>Name</b></td><td><b>Action</b></td></tr>
		<?php
		while($cat = fetch($result))
		{
			?>
			<tr>
				<td><?php echo $cat['id'];?></td>
				<td><?php echo $cat['name'];?></td>
				<td>
					<a href="<?php echo $base_url;?>modules/categories/edit_category.php?id=<?php echo $cat['id'];?>">Edit</a>
					<a href="">Delete</a>
				</td>
			</tr>
			<?php
		}
		?>
	</table>
	<?php
}
?>
<?php include('../../includes/footer.php');?>