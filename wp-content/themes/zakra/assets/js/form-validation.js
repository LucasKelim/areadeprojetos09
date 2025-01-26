document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('form_post');

    if (form) {
        const title = document.getElementById('post_title');
        const content = document.getElementById('post_content');
        const image = document.getElementById('post_image');

        const error_title = document.getElementById('error_title');
        const error_content = document.getElementById('error_content');
        const error_image = document.getElementById('error_image');

        form.addEventListener('submit', function (event) {
            let isValid = true;
            
            if (!title.value.trim()) {
                isValid = false;
                error_title.style.display = 'inline-block';
            }

            if (!content.value.trim()) {
                isValid = false;
                error_content.style.display = 'inline-block';
            }

            if (!image.files[0]) {
                isValid = false;
                error_image.style.display = 'inline-block';
            }

            if (!isValid) {
                event.preventDefault();
            }
        });

        title.addEventListener('input', function () {
            error_title.style.display = 'none';
        });

        content.addEventListener('input', function () {
            error_content.style.display = 'none';
        });

        image.addEventListener('change', function () {
            error_image.style.display = 'none';
        });
    }
});
