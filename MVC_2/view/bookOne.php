<?php
    ob_start();

    echo '<article>';
    echo '<h3>'.$book['gamename'].'</h3>';
    echo '<img src = "public/images/'.$book['image'].'">';
    echo '<p>Author(s): '.$book['developer'].'</p>';
    echo '<p>Price: '.$book['price'].'</p>';
    echo '<p>Содержание: '.$book['description'].'</p>';
    echo '<p style="padding-top:10px;">';
    echo '<a href="books" role="button"> Back &raquo;</a>';
    echo '</p>';
    echo '</article>';

    
    echo '<div style="clear:both;"></div>';

    $content = ob_get_clean();

include 'view/templates/layout.php';
?>
