<?php
$posts = [
    [
        'background_post' => 'images/still-standing-tall-img.jpg',
        'title' => 'Still Standing Tall',
        'subtitle' => 'Life begins at the end of your comfort zone.',
        'img_modifier' => 'images/william-wong-img.jpg',
        'author' => 'William Wong',
        'post_date' => '9/25/2015'
    ],
    [
        'background_post' => 'images/sunny-side-up-img.jpg',
        'title' => 'Sunny Side Up',
        'subtitle' => 'No place is ever as bad as they tell you its going to be.',
        'img_modifier' => 'images/mat-vogels-img.jpg',
        'author' => 'Mat Vogels',
        'post_date' => '9/25/2015'
    ],
    [
        'background_post' => 'images/water-falls-img.jpg',
        'title' => 'Water Falls',
        'subtitle' => 'We travel not to escape life, but for life not to escape us.',
        'img_modifier' => 'images/mat-vogels-img.jpg',
        'author' => 'Mat Vogels',
        'post_date' => '9/25/2015'
    ],
    [
        'background_post' => 'images/throught-the-mist-img.jpg',
        'title' => 'Through the Mist',
        'subtitle' => 'Travel makes you see what a tiny place you occupy in the world.',
        'img_modifier' => 'images/william-wong-img.jpg',
        'author' => 'William Wong',
        'post_date' => '9/25/2015'
    ],
    [
        'background_post' => 'images/awaken-early-img.jpg',
        'title' => 'Awaken Early',
        'subtitle' => 'Not all those who wander are lost.',
        'img_modifier' => 'images/mat-vogels-img.jpg',
        'author' => 'Mat Vogels',
        'post_date' => '9/25/2015'
    ],
    [
        'background_post' => 'images/try-it-always-img.jpg',
        'title' => 'Try it Always',
        'subtitle' => 'The world is a book, and those who do not travel read only one page.',
        'img_modifier' => 'images/mat-vogels-img.jpg',
        'author' => 'Mat Vogels',
        'post_date' => '9/25/2015'
    ],
];


$feature_posts = [
    [
        'background_post' => 'images/the-road-ahead-img.jpg',
        'tag_type' => 'none',
        'tag_text' => 'none',
        'title' => 'The Road Ahead',
        'subtitle' => 'The road ahead might be paved - it might not be.',
        'img_modifier' => 'images/mat-vogels-img.jpg',
        'author' => 'Mat Vogels',
        'post_date' => '9/25/2015'
    ],
    [
        'background_post' => 'images/from-top-down-img.jpg',
        'tag_type' => 'adventure',
        'tag_text' => 'Adventure',
        'title' => 'From Top Down',
        'subtitle' => 'Once a year, go someplace youve never been before.',
        'img_modifier' => 'images/william-wong-img.jpg',
        'author' => 'William Wong',
        'post_date' => '9/25/2015'
    ],
];

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Главная страница блога</title>
        <link  rel="stylesheet" href="css/home.css">
    </head>
    <body>
        <header class="header">
            <div class="header__navigate">
                <div class="navigate">
                    <img src="images/Esc1.svg" alt="logo-top">
                    <nav class="navigate__list">
                        <a href="#" class="navigate__list-item"><span class="item_header">home</span></a>
                        <a href="#" class="navigate__list-item"><span class="item_header">categories</span></a>
                        <a href="#" class="navigate__list-item"><span class="item_header">about</span></a>
                        <a href="#" class="navigate__list-item"><span class="item_header">contact</span></a>
                    </nav>
                </div> 
            </div>
            <div class="header__content-area">
                <div class="header__main-filling">
                    <span class="header__main-filling_top">Let's do it together.</span>
                    <span class="header__main-filling_bot">We travel the world in search of stories. Come along for the ride.</span>
                    <div class="header__latest-posts-btn">
                        <span class="header__latest-posts-btn_txt">View Latest Posts</span>
                    </div>
                </div>
            </div>
        </header>
        <div class="categories-menu">
            <nav class="categories-menu__navigate">
                <a href="#" class="categories-menu__navigate_item">Nature</a>
                <a href="#" class="categories-menu__navigate_item">Photography</a>
                <a href="#" class="categories-menu__navigate_item">Relaxation</a>
                <a href="#" class="categories-menu__navigate_item">Vacation</a>
                <a href="#" class="categories-menu__navigate_item">Travel</a>
                <a href="#" class="categories-menu__navigate_item">Adventure</a>
            </nav>
        </div>
        <div class="main-content">
            <div class="feature-posts">
                <div class="main-category__header">
                    <span class="main-category__header_txt">Featured Posts</span>
                    <div class="posts_header_underline"></div>
                </div>
                <?php 
                    foreach ($feature_posts as $feature_post) {
                        include 'feature_post_preview.php';
                    }
                ?>
            </div>
            <div class="most-recent-posts">
                <div class="main-category__header">
                    <span class="main-category__header_txt">Most Recent</span>
                    <div class="posts_header_underline"></div>
                </div>
                <?php 
                    foreach ($posts as $post) {
                        include 'post_preview.php';
                    }
                ?>
            </div>
        </div>
    </body>
</html>