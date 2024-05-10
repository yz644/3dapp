$(document).ready(function(){
    $.getJSON("../test/js/text.json", function(jsonObj) {
        console.log(jsonObj);

        $('#title_home').html('<h2>' + jsonObj.pageTextData[0].title + '</h2>');
        $('#subTitle_home').html('<h3>' + jsonObj.pageTextData[0].subTitle + '</h3>');
        $('#description_home').html('<p>' + jsonObj.pageTextData[0].description + '</p>');

        $('#title_coke').html('<h3>' + jsonObj.pageTextData[1].title + '</h3>');
        $('#subTitle_left').html('<p>' + jsonObj.pageTextData[1].subTitle + '</p>');
        $('#description_coke').html('<p>' + jsonObj.pageTextData[1].description + '</p>');

        $('#title_sprite').html('<h3>' + jsonObj.pageTextData[2].title + '</h3>');
        $('#subTitle_centre').html('<h3>' + jsonObj.pageTextData[2].subTitle + '</h3>');
        $('#description_sprite').html('<p>' + jsonObj.pageTextData[2].description + '</p>');

        $('#title_pepper').html('<h3>' + jsonObj.pageTextData[3].title + '</h3>');
        $('#subTitle_right').html('<h3>' + jsonObj.pageTextData[3].subTitle + '</h3>');
        $('#description_pepper').html('<p>' + jsonObj.pageTextData[3].description + '</p>');

        // Coca Cola
        $('#title_coke').html('<h3>' + jsonObj.pageTextData[4].title + '</h3>');
        $('#subTitle_coke').html('<p>' + jsonObj.pageTextData[4].subTitle + '</p>');
        $('#description_coke').html('<p>' + jsonObj.pageTextData[4].description + '</p>');
        $('#x3dModelTitle_coke').html(jsonObj.pageTextData[4].x3dModelTitle);
        $('#x3dCreationMethod_coke').html(jsonObj.pageTextData[4].x3dCreationMethod);

        // Sprite
        $('#title_sprite').html('<h2>' + jsonObj.pageTextData[5].title + '</h2>');
        $('#subTitle_sprite').html('<h3>' + jsonObj.pageTextData[5].subTitle + '</h3>');
        $('#description_sprite').html('<p>' + jsonObj.pageTextData[5].description + '</p>');

        // Dr Pepper
        $('#title_pepper').html('<h2>' + jsonObj.pageTextData[6].title + '</h2>');
        $('#subTitle_pepper').html('<h3>' + jsonObj.pageTextData[6].subTitle + '</h3>');
        $('#description_pepper').html('<p>' + jsonObj.pageTextData[6].description + '</p>');
    });
});
