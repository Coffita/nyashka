<?php include 'header.php'; ?>

<form action="create_post.php" method="post">
    <div class="new_post1">
        <input class="new_post" type="text" name="title" value=""></br>
        <textarea class="new_post" rows="10" cols="50" wrap="soft | hard" name="text"></textarea></br>
        <button type="submit">Добавить</button>
    </div>
</form>

<?php include 'footer.php'; ?>