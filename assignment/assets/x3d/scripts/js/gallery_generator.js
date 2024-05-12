$(document).ready(function() {
    var xmlHttp = new XMLHttpRequest();
    var htmlCode = "";
    var response;
    var send = "scripts/php/Hook.php";
    var imagePath = 'gallery/assets/images/';
    xmlHttp.open("GET", send, true);
    xmlHttp.onreadystatechange = function() {
        if (xmlHttp.readyState === 4 && xmlHttp.status === 200) {
            response = xmlHttp.responseText.split("~");
            // 初始化Bootstrap行
            htmlCode += '<div class="row">';
            for (var i = 0; i < response.length; i++) {
                // 对于每个图像开始一个新的Bootstrap列
                htmlCode += '<div class="col-md-6">';
                htmlCode += '<a href="' + imagePath + response[i] + '">';
                htmlCode += '<img class="card-img-top img-thumbnail" src="' + imagePath + response[i] + '">';
                htmlCode += '</a>';
                htmlCode += '</div>'; // 结束列
                // 每两个图像结束并开始一个新行
                if ((i + 1) % 2 === 0) {
                    htmlCode += '</div><div class="row">'; // 结束当前行并开始新行
                }
            }
            // 结束最后一个行
            htmlCode += '</div>';

            // 使用函数来更新innerHTML，避免重复代码
            function updateGalleryInnerHTML(elementId) {
                var element = document.getElementById(elementId);
                if (element) {
                    element.innerHTML = htmlCode;
                }
            }

            // 更新各个画廊的innerHTML，如果它们存在的话
            updateGalleryInnerHTML('gallery_coke');
            updateGalleryInnerHTML('gallery_sprite');
            updateGalleryInnerHTML('gallery_pepper');
        }
    };
    xmlHttp.send();
});
