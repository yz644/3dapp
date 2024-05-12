$(document).ready(function(){
    $.getJSON("../lab6/model/data.json", function(jsonObj) {
        console.log(jsonObj);
        $('#title_home').html('<h2>' + jsonObj.pageTextData[0].title + '</h2>');
        $('#subTitle_home').html('<h3>' + jsonObj.pageTextData[0].subTitle + '</h3>');
        $('#description_home').html('<p>' + jsonObj.pageTextData[0].description + '</p>');

        $('#title_left').html('<h2>' + jsonObj.pageTextData[1].title + '</h2>');
        $('#subTitle_left').html('<h3>' + jsonObj.pageTextData[1].subTitle + '</h3>');
        $('#description_left').html('<p>' + jsonObj.pageTextData[1].description + '</p>');

        $('#title_centre').html('<h2>' + jsonObj.pageTextData[2].title + '</h2>');
        $('#subTitle_centre').html('<h3>' + jsonObj.pageTextData[2].subTitle + '</h3>');
        $('#description_centre').html('<p>' + jsonObj.pageTextData[2].description + '</p>');

        $('#title_right').html('<h2>' + jsonObj.pageTextData[3].title + '</h2>');
        $('#subTitle_right').html('<h3>' + jsonObj.pageTextData[3].subTitle + '</h3>');
        $('#description_right').html('<p>' + jsonObj.pageTextData[3].description + '</p>');

        $('#x3dModelTitle_coke').html(jsonObj.pageTextData[4].x3dModelTitle);
        $('#x3dCreationMethod_coke').html('<h3>' + jsonObj.pageTextData[4].x3dCreationMethod);
        $('#description_coke').html('<p>' + jsonObj.pageTextData[4].description + '</p>');

        $('#title_sprite').html('<h2>' + jsonObj.pageTextData[5].title + '</h2>');
        $('#subTitle_sprite').html('<h3>' + jsonObj.pageTextData[5].subTitle + '</h3>');
        $('#description_sprite').html('<p>' + jsonObj.pageTextData[5].description + '</p>');

        $('#title_pepper').html('<h2>' + jsonObj.pageTextData[6].title + '</h2>');
        $('#subTitle_pepper').html('<h3>' + jsonObj.pageTextData[6].subTitle + '</h3>');
        $('#description_pepper').html('<p>' + jsonObj.pageTextData[6].description + '</p>');

        $('#gallerytitle').html('<h2>' + jsonObj.pageTextData[7].gallerytitle + '</h2>');
        $('#galleryDescription').html('<h3>' + jsonObj.pageTextData[7].galleryDescription + '</h3>');

        $('#CameraTitle').html('<h3>' + jsonObj.pageTextData[8].CameraTitle + '</h3>');
        $('#cameraDsecription').html('<h3>' + jsonObj.pageTextData[8].cameraDsecription + '</h3>');


    });
    $('[data-fancybox]').fancybox({
        clickSlide: "close", // 当点击大图时关闭 Fancybox
        clickOutside: "close" // 当点击大图之外的区域时关闭 Fancybox
    });

    

});
