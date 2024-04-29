const titleInput = document.getElementById('title');
const subtitleInput = document.getElementById('subtitle');
const authorNameInput = document.getElementById('author_name');
const publishDateInput = document.getElementById('publish_date');

const postImageInput = document.getElementById('post-img');
const previewImageInput = document.getElementById('preview-img');
const authorAvatarInput = document.getElementById('author-avatar');

titleInput.addEventListener('change', () => CopyText(titleInput, 'article-title-new'));
titleInput.addEventListener('change', () => CopyText(titleInput, 'post-card-title-new'));

subtitleInput.addEventListener('change', () => CopyText(subtitleInput, 'article-subtitle-new'));
subtitleInput.addEventListener('change', () => CopyText(subtitleInput, 'post-card-subtitle-new'));

authorNameInput.addEventListener('change', () => CopyText(authorNameInput, 'author-name-new'));

publishDateInput.addEventListener('change', () => CopyDate(publishDateInput, 'publish_date-new'));

postImageInput.addEventListener('change', () => copyImage(postImageInput, 'post-img-new'));
postImageInput.addEventListener('change', () => copyImage(postImageInput, 'big-img'));
postImageInput.addEventListener('change', () => updateArticlePreview());

previewImageInput.addEventListener('change', () => copyImage(previewImageInput, 'preview-img-new'));
previewImageInput.addEventListener('change', () => copyImage(previewImageInput, 'small-img'));
previewImageInput.addEventListener('change', () => updatePostCardPreview());

authorAvatarInput.addEventListener('change', () => copyImage(authorAvatarInput, 'author-avatar-new'));
authorAvatarInput.addEventListener('change', () => copyImage(authorAvatarInput, 'author-avatar-img'));
authorAvatarInput.addEventListener('change', () => updateAuthorImage());

function CopyText(from, on) {
    let elem = document.getElementById(on);
    elem.textContent = from.value;
}

function CopyDate(from, on) {
    const options = { year: 'numeric', month: '2-digit', day: '2-digit' };
    var elem = document.getElementById(on);
    elem.textContent = (new Date(from.value)).toLocaleDateString("en-GB", options);
}

function copyImage(from, to) {
    const file = from.files[0];
    if (file) {
        const reader = new FileReader();
        const imageContain = document.getElementById(to);
        reader.onload = function (e) {
            const imageurl = e.target.result;
            imageContain.style.backgroundImage = `url(${imageurl})`;
        };
        reader.readAsDataURL(file);
    }
    else {
        console.log('Error at reading image.\n');
    }
}

function updateArticlePreview() {
    let postImage = document.getElementById('big-img-label');
    postImage.style.display = 'none';
    let newUploadBtn = document.getElementById('');
    newUploadBtn.style.display = 'flex';
    let postImageDesc = document.getElementById('post-img-desc');
    postImageDesc.style.display = 'none';
    let 
}






