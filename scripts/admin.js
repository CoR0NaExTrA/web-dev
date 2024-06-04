const titleInput = document.getElementById('title');
const subtitleInput = document.getElementById('subtitle');
const authorNameInput = document.getElementById('author');
const publishDateInput = document.getElementById('publish_date');

const postImageInput = document.getElementById('post-img');
const previewImageInput = document.getElementById('image_url');
const authorAvatarInput = document.getElementById('author_url');

const formDatas = {
    title: "",
    subtitle: "",
    author: "",
    publish_date: "",
    image_url: "", 
    author_url: "", 
    content: "",
    featured: "0",
    tag_type: "",
    tag_text: ""
}

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

function CopyText(from, i) {
    let elem = document.getElementById(i);
    elem.textContent = from.value;
    //formData.title = from.value;
}

function CopyDate(from, i) {
    const options = { year: 'numeric', month: '2-digit', day: '2-digit' };
    var elem = document.getElementById(i);
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
    let newUploadBtn = document.getElementById('delete-post-img');
    newUploadBtn.style.display = 'flex';
    let postImageDesc = document.getElementById('post-img-desc');
    postImageDesc.style.display = 'none';
    let blockBigMain = document.getElementById('big-img');
    blockBigMain.style.border = '1px solid #d3d3d3';
}

function RemovePostImage() {
    const bigImageMain = document.getElementById('big-img-label');
    bigImageMain.style.display = 'flex';

    const bigPhotoDiscription = document.getElementById('post-img-desc');
    bigPhotoDiscription.style.display = 'flex';

    const newUploadButton = document.getElementById('delete-post-img');
    newUploadButton.style.display = 'none';

    postImageInput.value = '';

    const blockBigPreview = document.getElementById('post-img-new');
    blockBigPreview.style.backgroundImage = 'none';

    const blockBig = document.getElementById('big-img');
    blockBig.style.backgroundImage = 'none';
    blockBig.style.border = '1px dashed #d3d3d3';
}

function updatePostCardPreview() {
    let postImage = document.getElementById('small-img-label');
    postImage.style.display = 'none';
    let newUploadBtn = document.getElementById('delete-preview-img');
    newUploadBtn.style.display = 'flex';
    let postImageDesc = document.getElementById('preview-img-desc');
    postImageDesc.style.display = 'none';
    let blockSmallMain = document.getElementById('small-img');
    blockSmallMain.style.border = '1px solid #d3d3d3';
}

function RemovePreviewImage() {
    let bigImageMain = document.getElementById('small-img-label');
    bigImageMain.style.display = 'flex';

    let bigPhotoDiscription = document.getElementById('preview-img-desc');
    bigPhotoDiscription.style.display = 'flex';

    let newUploadButton = document.getElementById('delete-preview-img');
    newUploadButton.style.display = 'none';

    previewImageInput.value = '';

    let blockSmallPreview = document.getElementById('preview-img-new');
    blockSmallPreview.style.backgroundImage = 'none';

    let blockSmall = document.getElementById('small-img');
    blockSmall.style.backgroundImage = 'none';
    blockSmall.style.border = '1px dashed #d3d3d3';
}

function updateAuthorImage() {
    let postImage = document.getElementById('photo-label');
    postImage.style.display = 'none';
    let iconCamera = document.getElementById('icon-camera');
    iconCamera.style.display = 'none';
    let newUploadBtn = document.getElementById('delete-photo');
    newUploadBtn.style.display = 'flex';
    let blockSmallMain = document.getElementById('author-avatar-img');
    blockSmallMain.style.border = '1px solid #d3d3d3';
}

function RemovePhoto() {
    let bigImageMain = document.getElementById('photo-label');
    bigImageMain.style.display = 'flex';

    let iconCamera = document.getElementById('icon-camera');
    iconCamera.style.display = 'flex';

    let newUploadButton = document.getElementById('delete-photo');
    newUploadButton.style.display = 'none';

    authorAvatarInput.value = '';

    let blockSmallPreview = document.getElementById('author-avatar-new');
    blockSmallPreview.style.backgroundImage = 'none';

    let blockPhoto = document.getElementById('author-avatar-img');
    blockPhoto.style.backgroundImage = 'none';
    blockPhoto.style.border = '1px dashed #d3d3d3';
}

function ValidateForm() {
    const form = document.getElementById('main-form');
    let isEmpty = false;

    for (let i = 0; i < form.elements.length; i++) {
        const element = form.elements[i];
        if (element.value === '') {
            isEmpty = true;
            element.classList.remove('form__box_input');
            element.classList.add('form__box_input-error');
        } else {
            element.classList.remove('form__box_input-error');
            element.classList.add('form__box_input');
        }
    }

    const errBlock = document.getElementById('error_block');
    const succBlock = document.getElementById('succ_block');
    if (isEmpty) {
        errBlock.style.display = 'flex';
        succBlock.style.display = 'none';
    } else {
        errBlock.style.display = 'none';
        succBlock.style.display = 'flex';
        displayFormData();
    }
}

function displayFormData() {
    const formData = new FormData(document.getElementById('main-form'));
    for (const [key, value] of formData.entries()) {
        if (value instanceof File) {
            readAndDisplayFile(key, value);
        } else {
            //console.log(`${key}: ${value}`);
            formDatas[key] = value;
        }
    }
    sendForm(formDatas);
}

function readAndDisplayFile(k, file) {
    const reader = new FileReader();
    reader.onload = function (e) {
        //console.log(`${file.name}: ${e.target.result}`);
        formDatas[k] = e.target.result;
    };
    reader.readAsDataURL(file);
}

async function sendForm(formDatas) {
    const res = await fetch('./api.php', {
        method: 'POST',
        body: JSON.stringify(formDatas)
    });

    const resu = await res.json();
}
