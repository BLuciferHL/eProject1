<?php 
	$query="select*from categories where status=1";
	$categories=$connect->query($query);
	foreach ($categories as $category):
?>
<section class="category">
	<section class="img"><a href="?option=search&category=<?=$category['name']?>"><img src="image/<?=$category['image']?>"></a></section>
</section>
<?php endforeach; ?>