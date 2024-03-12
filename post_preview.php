<article class="most-recent__item">
        <img class="most-recent__item_img" src="<?= $post['background_post'] ?>" alt="img">
        <div class="most-recent__item_content-area">
            <h3 class="most-recent__main-txt"><?= $post['title']?></h3>
            <span class="most-recent__bot-txt"><?= $post['subtitle']?></span>
            <div class="most-recent__item_author-info">
                <div class="most-recent__author-info">
                    <img class="author-info__img" src="<?= $post['img_modifier']?>" alt="img">
                    <span class="most-recent__author-info_txt"><?= $post['author']?></span>
                    <span class="most-recent__author-info_date"><?= $post['post_date']?></span>
                </div>
            </div>
        </div>
</article>