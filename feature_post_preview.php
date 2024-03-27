<article class="feature-posts__item_img" style="background-image: url(<?= $feature_post['background_post'] ?>)">
    <div class="feature-posts__tag__<?= $feature_post['tag_type'] ?>">
        <span class="feature-posts__tag_txt"><?= $feature_post['tag_text'] ?></span>
    </div>
    <h2 class="article-info__main-txt"><?= $feature_post['title'] ?></h2>
    <span class="article-info__bot-txt"><?= $feature_post['subtitle'] ?></span>
    <div class="article-info">
        <div class="author-info">
            <img class="author-info__img" src="<?= $feature_post['img_author'] ?>" alt="img">
            <span class="author-info__txt"><?= $feature_post['author'] ?></span>
        </div>
        <span class="article-info__date"><?= date('m/d/Y', $feature_post['post_date'])?></span>
    </div>
    <a class="post_link" href='/post.php?id=<?= $feature_post['id'] ?>'><span></span></a>
</article>