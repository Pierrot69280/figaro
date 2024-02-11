<h1>Edition de commentaire</h1>

<form action="?type=comment&action=update" method="post">
    <div>
        <input class="form-control" type="text" name="content" value="<?= $comment->getContent() ?>">
    </div>
    <input type="hidden" value="<?= $comment->getId() ?>" name="id">
    <div>
        <button class="btn btn-success" type="submit">Update</button>

    </div>

</form>