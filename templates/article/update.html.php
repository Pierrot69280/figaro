<h1>Les articles</h1>


<div class="border border-dark">

    <form action="?type=article&action=update" method="post">

        <div>
            <input class="form-control" type="text" name="title" value="<?= $article->getTitle() ?>">
        </div>


        <div>

            <textarea class="form-control" name="content" id="" cols="30" rows="4"><?= $article->getContent() ?></textarea>

        </div>

        <input type="hidden" name="idArticle" value="<?= $article->getId() ?>">

        <button class="btn btn-success" type="submit">Update</button>
    </form>
</div>