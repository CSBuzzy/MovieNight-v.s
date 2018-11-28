var bouton1 = document.getElementById("suivant");
var bouton2 = document.getElementById("precedent");
bouton1.onclick = function(){
 changerPage();
}
bouton2.onclick = function(){
 changerPage();
}


function changerPage(){
	var form1 = document.getElementById("form1");
	var form2 = document.getElementById("form2");
	//Si on est sur le form 1 est un flex, on 'display none',
	//puis on 'display flex' sur le form2
	if(form1.style.display == "flex" || form1.style.display == ""){
		form1.style.display = "none";
		form2.style.display = "flex";
	}
	//Sinon, on 'display flex' le form1, et 'display none' le form2
	else{
		form1.style.display = "flex";
		form2.style.display = "none";
	}
}

    $(function() {
    function maskImgs() {
        //$('.img-wrapper img').imagesLoaded({}, function() {
        $.each($('.img-wrapper img'), function(index, img) {
            var src = $(img).attr('src');
            var parent = $(img).parent();
            parent
                .css('background', 'url(' + src + ') no-repeat center center')
                .css('background-size', 'cover');
            $(img).remove();
        });
        //});
    
	}
    

    var preview = {
        init: function() {
            preview.setPreviewImg();
            preview.listenInput();
        },
        setPreviewImg: function(fileInput) {
            var path = $(fileInput).val();
            var uploadText = $(fileInput).siblings('.file-upload-text');

            if (!path) {
                $(uploadText).val('');
            } else {
                path = path.replace(/^C:\\fakepath\\/, "");
                $(uploadText).val(path);

                preview.showPreview(fileInput, path, uploadText);
            }
        },
        showPreview: function(fileInput, path, uploadText) {
            var file = $(fileInput)[0].files;

            if (file && file[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    var previewImg = $(fileInput).parents('.file-upload-wrapper').siblings('.preview');
                    var img = $(previewImg).find('img');

                    if (img.length == 0) {
                        $(previewImg).html('<img src="' + e.target.result + '" alt=""/>');
                    } else {
                        img.attr('src', e.target.result);
                    }

                    uploadText.val(path);
                    maskImgs();
                }

                reader.onloadstart = function() {
                    $(uploadText).val('uploading..');
                }

                reader.readAsDataURL(file[0]);
            }
        },
        listenInput: function() {
            $('.file-upload-native').on('change', function() {
                preview.setPreviewImg(this);
            });
        }
    };
    preview.init();
});






