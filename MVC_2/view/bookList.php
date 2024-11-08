<?php
    ob_start();
?>
<h2>Список игр</h2>
<?php
foreach ($booksList as $bookOne) {
    echo '<article>';
    echo '<h3>';
    echo '<a href="book?title='.$bookOne['gamename'].'">'.$bookOne['gamename'].'</a>';
    echo '</h3>';
    echo '<img src="public/images/'.$bookOne['image'].'">';
    echo '<p>Author(s): '.$bookOne['developer'].'</p>';
    echo '<p>Price: '.$bookOne['price'].'</p>';
    echo '<p style="padding-top:10px;">';
    echo '<a href="book?title='.$bookOne['gamename'].'" role="button">Содержание &raquo;</a>';
    echo '</p>';
    echo '</article>';
    echo '<div style="clear:both"></div>';
}

 ?>

<?php
$content = ob_get_clean();
include 'view/templates/layout.php';
 ?>
