<h1>Список всех новостей</h1>
<?php if(!empty($var)):?>
<div class="bg-info">
	<table border="1" width="100%" >
		<tr>
			<td>Новость номер: <?php echo $value[0]; ?> </td> 
			<td>Дата: <?php echo $value[1]; ?> </td>
		</tr>
		<tr> <?php echo $value[3] ?> </tr>
		<tr>
			<td><img src="<?php echo $value[2]; ?>" class="img-circle" alt="Responsive image"></td>
			<td> <?php echo $value[4]; ?>	 </td>
		</tr>
	</table>
</div>
<?php endif; ?>