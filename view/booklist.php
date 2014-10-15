<html>
<head></head>

<body>

<table>
    <tr><td><h2>Title</h2></td><td><h2>Author</h2></td><td><h2>Description</h2></td></tr>
	<?php 

		foreach ($books as $title => $book)
		{
			echo '<tr><td><a href="index.php?book='.$book->title.'">'.$book->title.'</a></td><td>'.$book->author.'</td><td>'.$book->description.'</td></tr>';
		}

	?>
</table>

</body>
</html>