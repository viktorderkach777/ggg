$(function () {
    $inputUploadImage = $("#inputImageUpload");
    $imageView = $("#user-icon");
    $linkSelectFile = $("#linkSelectFile");
    $progressUpload = $("#progressUpload");
    //console.log("---upload DOM---");

    $linkSelectFile.on('click', function (e) {
        e.preventDefault();
        uploadIcon();
    });

    $imageView.on('click', function () {
        uploadIcon();
        //console.log("---Hello--", "click image");
    });
    $inputUploadImage.on('change', function (e) {

        e.preventDefault();
        $progressUpload.show();
        //console.log('-----upload select file----', e.target);
        let files;
        if (e.dataTransfer) {
            files = e.dataTransfer.files;
        } else if (e.target) {
            files = e.target.files;
        }

        if (files && files[0]) {
            //console.log('----file[0]----', files[0]);
            if (files[0].type.match(/^image\//)) {
                
                const reader = new FileReader();
                reader.onload = function () {
                    $imageView.attr('src', reader.result);
                    $progressUpload.hide();

                };
                reader.readAsDataURL(files[0]);
            }
            else {
                alert("Invalid file type");
            }

        }
        else {
            alert("Please select a file.");
        }
    });

    function uploadIcon() {
        $inputUploadImage.click();
    }
});