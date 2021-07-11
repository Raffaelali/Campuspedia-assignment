const inpFile = document.getElementById('inpFile');
const previewContainer = document.getElementById("imageContainer");
const previewImage = previewContainer.querySelector('.theImage');


inpFile.addEventListener('change', function () {
    const file = this.files[0];
    if (file) {
        const reader = new FileReader();

        reader.addEventListener('load', function () {
            previewImage.setAttribute("src", this.result);
        });

        reader.readAsDataURL(file);
    } else {
        previewImage.style.display = "null";
        previewImage.setAttribute("src", "");
    }
});