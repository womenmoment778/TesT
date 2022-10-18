
	<?php include "left-sidebar.php"; ?>
	<div class="content">ТЕЛО</div>
	<?php  include "right-sidebar.php" ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<?php $i = 1; ?>
<?php while($i <= 20) { ?>
<div>
	<h1>заголовок нашей записи №<?php echo $i;?></h1>
	<div>Краткое описание нашей записи №<?php echo $i;?></div>
	<div><a href="/">Читать далее...</a></div>
</div>
<?php $i++; }?>
