$(function () {
    $inputUploadImage = $("#inputImageUpload");
    $imageView = $("#user-icon");
    $linkSelectFile = $("#linkSelectFile");
    $progressUpload = $("#progressUpload");
    $inputUploadImage2 = $("#inputImageUpload2");
    $temp = $("#temp");    

    $linkSelectFile.on('click', function (e) {
        e.preventDefault();
        uploadIcon();
    });

    $imageView.on('click', function () {
        uploadIcon();        
    });
    $inputUploadImage.on('change', function (e) {
        
        $progressUpload.show();        
        let files;
        if (e.dataTransfer) {
            files = e.dataTransfer.files;
        } else if (e.target) {
            files = e.target.files;
        }

        if (files && files[0]) {            
            if (files[0].type.match(/^image\//)) {
                
                const reader = new FileReader();
                reader.onload = function () {
                    $imageView.attr('src', reader.result);
                    $inputUploadImage2.click();
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