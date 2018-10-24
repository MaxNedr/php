<?php
$allCommentsBD = getItemArray('select comment from site_comment');
foreach ($allCommentsBD as $comment) {
    foreach ($comment as $key => $value) {
        $allComments[] = $value;
        $all = implode('<br>', $allComments);
    }
}
if (isset($_POST['submit'])) {
    $newComments = '';
    $newComments = $_POST['writeComment'];
    $str = preg_replace('/\s+/', '', $newComments);
    if ($str) {
        execute("insert into `site_comment`(`comment`) value('{$newComments}')");
        header("Location: /comment.php");
    }

}
/*if (isset($_POST['clearAll'])) {
    execute("delete	from site_comment");
    header("Location: /comment.php");
}*/

?>
<form method="post" enctype="multipart/form-data" class="form">
    <div class="readComment"><?php echo $all ?></div>
    <label for="text" class="form"> Введите комментарий</label>
    <textarea class="form" name="writeComment" id="text" cols="40" rows="3"></textarea>
    <br>
    <input class="form" type="submit" name="submit">
<!--    <input class="form" type="button" name="clearAll" value="Удалить все">-->
</form>

<!---->