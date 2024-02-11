<h1>Les articles</h1>

<div class="border border-dark">

    <h2>Titre : <?= $article->getTitle() ?></h2>
    <p>Contenu : <?= $article->getContent() ?></p>

    <a href="?type=article&action=index" class="btn btn-secondary">Retour</a>
    <a href="?type=article&action=update&id=<?= $article->getId() ?>" class="btn btn-warning">Editer</a>
    <a href="?type=article&action=delete&id=<?= $article->getId() ?>" class="btn btn-danger">Supprimer</a>
</div>



<div class="border border-dark">
    <?php foreach ($article->getComments() as $comment): ?>
        <p class="fs-5 mt-5">Publié par : <?= $article->getAuthor()->getUsername() ?></p>
        <p><strong><?= $comment->getContent() ?></strong></p>
        <a href="?type=comment&action=delete&id=<?= $comment->getId() ?>" class="btn btn-danger">Supprimer</a>
        <a href="?type=comment&action=update&id=<?= $comment->getId() ?>" class="btn btn-warning">Editer</a>
    <?php endforeach; ?>
</div>


<div>
    <form action="?type=comment&action=create" method="post">

        <div>
            <input class="form-control" type="text" name="content" placeholder="your comment">
        </div>
        <input type="hidden" name="articleId" value="<?= $article->getId() ?>">
        <div>
            <button type="submit" class="btn btn-success">send</button>
        </div>

    </form>
</div>