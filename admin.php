<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Oxygen:wght@300;400;700&display=swap"
        rel="stylesheet">
    <script defer type="text/javascript" src="localhost/scripts/admin.js"></script>
    <title>
        Admin
    </title>
</head>

<body>
    <header class="header">
        <div class="header__content">
            <img class="header__logo" src="images/Logo-author_Inversed.svg" alt="Escape.author" />
            <div class="header__menu">
                <div class="header__menu-avatar">
                    <span class="header__menu-avatar_text">N</span>
                </div>
                <div class="header__menu-icon_area">
                    <img class="header__menu-icon" src="images/Icon-Escape.svg" alt="Icon-Escape" />
                </div>
            </div>
        </div>
    </header>
    <div class="main-content">
        <div class="publishing-post">
            <div class="publishing-post__info">
                <h1 class="publishing-post__info_title">New Post</h1>
                <h4 class="publishing-post__info_subtitle">Fill out the form bellow and publish your article</h4>
            </div>
            <button type="submit" class="publish-button" onclick="ValidateForm()">Publish</button>
        </div>

        <div id="error_block" class="error_publishing">
            <img class="error_publishing_image" src="images/alert-circle.svg" alt="icon error" />
            <p class="error_publishing_text">Whoops! Some fields need your attention :o</p>
        </div>

        <div id="succ_block" class="succ_publishing">
            <img class="succ_publishing_image" src="images/check-circle.svg" alt="icon success" />
            <p class="succ_publishing_text">Publish Complete!</p>
        </div>

        <div class="main-information">
            <h2 class="main-information__title">Main Information</h2>
            <div class="main-information__forms">
                <form id="main-form" class="form">
                    <div class="form__box">
                        <label class="form__box_text" for="title">Title</label>
                        <input id="title" name="title" class="form__box_input" type="text" placeholder=" "
                            value="New Post" />
                    </div>

                    <div class="form__box">
                        <label class="form__box_text" for="subtitle">Short description</label>
                        <input id="subtitle" name="subtitle" class="form__box_input" type="text" placeholder=" "
                            value="Please, enter any description"/>
                    </div>

                    <div class="form__box">
                        <label class="form__box_text" for="author">Author name</label>
                        <input id="author" name="author" class="form__box_input" type="text"
                            placeholder=" " />
                        <h3 class="form__box_label-bottom-error">Author name is required.</h3>
                    </div>

                    <div class="form__box">
                        <label class="form__box_text" for="author_url">Author Photo</label>
                        <div class="form__box_author-avatar">
                            <div id="author-avatar-img" class="form__box_avatar-img">
                                <img id="icon-camera" class="form__box_avatar-icon" src="images/camera.svg"
                                    alt="Author avatar" />
                            </div>
                            <input id="author_url" name="author_url" type="file" class="form__box_avatar-btn"
                                accept=".jpg, .jpeg, .png, .gif" />
                            <label id="photo-label" for="author_url">
                                <span class="form__box_avatar-button_text">Upload</span>
                            </label>
                            <div id="delete-photo" class="delete-photo">
                                <img class="form__box__button-icon" src="images/camera.svg" alt="icon camera" />
                                <label class="delete-post-img_label" for="author_url">
                                    <span class="form__box_post-img__button_text">Upload New</span>
                                </label>
                                <img class="form__box__button-icon" src="images/trash-2.svg" alt="icon trash" />
                                <label id="delete-big" class="label_remove" onclick="RemovePhoto()">
                                    <span class="form__box__button_text_remove">Remove</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form__box">
                        <label class="form__box_text">Publish Date</label>
                        <input id="publish_date" name="publish_date" class="form__box_input" type="date" placeholder="mm/dd/yyyy" />
                    </div>

                    <div class="form__box">
                        <label class="form__box_text" for="post-img">Hero Image</label>
                        <div id="big-img" class="form__box_post-img__area">
                            <div class="form__box_post-img__button">
                                <div class="form__box_post-img__button-title">
                                    <input id="post-img" name="post-img" type="file" class="form__box_avatar-btn"
                                        accept=".jpg, .jpeg, .png, .gif" />
                                    <label class="form__box__button_label" for="post-img" id="big-img-label">
                                        <img src="images/camera.svg" alt="icon camera" />
                                        <span class="form__box_post-img__button_text">Upload</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <h6 class="form__box_post-img_description" id="post-img-desc">Size up to 10mb. Format: png,
                            jpeg, gif.</h6>
                        <div id="delete-post-img" class="delete-post-img">
                            <img class="form__box__button-icon" src="images/camera.svg" alt="icon camera" />
                            <label class="delete-post-img_label" for="post-img">
                                <span class="form__box_post-img__button_text">Upload New</span>
                            </label>
                            <img class="form__box__button-icon" src="images/trash-2.svg" alt="icon trash" />
                            <label id="delete-big" class="label_remove" onclick="RemovePostImage()">
                                <span class="form__box__button_text_remove">Remove</span>
                            </label>
                        </div>
                    </div>

                    <div class="form__box">
                        <label class="form__box_text" for="image_url">Hero Image</label>
                        <div id="small-img" class="form__box_preview-img__area">
                            <div class=".form__box_preview-img__button">
                                <div class="form__box_post-img__button-title">
                                    <input id="image_url" name="image_url" type="file" class="form__box_avatar-btn"
                                        accept=".jpg, .jpeg, .png, .gif" />
                                    <label class="form__box__button_label" for="image_url" id="small-img-label">
                                        <img src="images/camera.svg" alt="icon camera" />
                                        <span class="form__box_post-img__button_text">Upload</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <h6 class="form__box_post-img_description" id="preview-img-desc">Size up to 5mb. Format: png,
                            jpeg, gif.</h6>
                        <div id="delete-preview-img" class="delete-preview-img">
                            <img class="form__box__button-icon" src="images/camera.svg" alt="icon camera" />
                            <label class="delete-preview-img_label" for="image_url">
                                <span class="form__box_preview-img__button_text">Upload New</span>
                            </label>
                            <img class="form__box__button-icon" src="images/trash-2.svg" alt="icon trash" />
                            <label id="delete-small" class="label_remove" onclick="RemovePreviewImage()">
                                <span class="form__box__button_text_remove">Remove</span>
                            </label>
                        </div>
                    </div>
                </form>
                <div class="preview">
                    <h4 class="preview__article_title">Article preview</h4>
                    <div class="preview__article">
                        <div class="preview__article_left-shadow"></div>
                        <div class="preview__article_bottom-shadow"></div>
                        <div class="preview__article_content">
                            <div class="preview__article_ellipsis">
                                <div class="dot"></div>
                                <div class="dot"></div>
                                <div class="dot"></div>
                            </div>
                            <div class="preview__article_header">
                                <h5 class="preview__article_header_title" id="article-title-new">New Post</h5>
                                <h6 class="preview__article_header_subtitle" id="article-subtitle-new">Please, enter any
                                    description</h6>
                            </div>
                            <div class="preview__article_image" id="post-img-new"></div>
                        </div>
                    </div>
                    <h4 class="preview__post-card_title">Post card preview</h4>
                    <div class="preview__post-card">
                        <div class="preview__post-card_left-shadow"></div>
                        <div class="preview__post-card_bottom-shadow"></div>
                        <div class="preview__post-card_content">
                            <div class="preview__post-card_image" id="preview-img-new"></div>
                            <div class="preview__post-card_header">
                                <h5 class="preview__post-card_header_title" id="post-card-title-new">New Post</h5>
                                <h6 class="preview__post-card_header_subtitle" id="post-card-subtitle-new">Please, enter
                                    any description</h6>
                            </div>
                            <div class="preview__post-card_info">
                                <div class="preview__post-card_info_image" id="author-avatar-new"></div>
                                <span class="preview__post-card_info_author" id="author-name-new">Enter author
                                    name</span>
                                <span class="preview__post-card_info_date" id="publish_date-new">29/04/2024</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <h2 class="content__title">Content</h2>
                <form class="content__post" id="content__form">
                    <label class="content__post_title" for="post-content">Post content (plain text)</label>
                    <textarea class="content__post_input" id="post-content" name="post-content" cols="125" rows="6"
                        placeholder="Type anything you want..."></textarea>
                </form>
            </div>
        </div>
    </div>
</body>

</html>