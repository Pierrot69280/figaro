<h1>Les articles</h1>

<?php foreach ($articles as $article) : ?>

    <div class="border border-dark">

        <p class="fs-5 mt-5">Publié par : <?= $article->getAuthor()->getUsername() ?></p>

        <h2>Titre : <?= $article->getTitle() ?></h2>
        <p>Contenu : <?= $article->getContent() ?></p>

        <a href="?type=article&action=show&id=<?= $article->getId() ?>" class="btn btn-primary">Voir</a>
    </div>
<?php endforeach; ?>