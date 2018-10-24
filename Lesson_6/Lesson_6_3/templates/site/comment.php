<?php
if (isset($_POST['submit'])) {

    $comments[] = $_POST['writeComment'];
    $allComments = implode('<br>', $comments);
    print_r($comments);
}

?>
<form method="post" enctype="multipart/form-data">
    <div class="readComment"><?php echo $allComments ?> комментарии</div>
    <textarea name="writeComment" id="" cols="40" rows="3"></textarea>
    <br>
    <input type="submit" name="submit">
</form>
