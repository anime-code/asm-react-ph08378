function encodeImageFileAsURL(element) {
    var file = element.files[0];
    if (file === undefined) {
        $(".preview-img img").attr('src', "images/default-img.jpg");
    } else {
        var reader = new FileReader();
        reader.onloadend = function () {
            if (reader.result) {
                $(".preview-img img").attr('src', reader.result);
            }
        }
        reader.readAsDataURL(file);
    }
}
