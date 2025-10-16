<?php
    $name=$_POST['name'];
    $comment=$_POST['comment'];
    $city_id=$_POST['city_id'];

    echo '
        <h3 class="username_field">'.$name.'</h3>
        <div class="comment_text"><p>'.$comment.'</p></div>
        <div class="comment_button_holder">
            <button class="button button-block" name="submit"/>Delete comment</button>
        </div>
        ';

?>