

document.onload = function() {
    // 初始化代码，确保X3D已加载
};



function toggleRotation(axis) {
    var sensor = document.getElementById('RotationTimer' + axis);
    var isEnabled = sensor.getAttribute('enabled') === 'true';
    sensor.setAttribute('enabled', (!isEnabled).toString());
}

function startRotation(axis) {
    // 禁用所有轴的旋转
    var axes = ['X', 'Y', 'Z'];
    axes.forEach(function(a) {
        var sensor = document.getElementById('RotationTimer' + a);
        if (sensor && a !== axis) {
            sensor.setAttribute('enabled', 'false');
        }
    });

    // 启用选定轴的旋转
    var selectedSensor = document.getElementById('RotationTimer' + axis);
    if (selectedSensor) {
        selectedSensor.setAttribute('enabled', 'true');
    }
}

function stopAllRotations() {
    var sensors = ['RotationTimerX', 'RotationTimerY', 'RotationTimerZ'];
    sensors.forEach(function(sensorID) {
        var sensor = document.getElementById(sensorID);
        if (sensor) {
            sensor.setAttribute('enabled', 'false');
        }
    });
}



function animateModel()
{
    if(document.getElementById('model__RotationTimerX').getAttribute('enabled')!= 'true')
        document.getElementById('model__RotationTimerY').setAttribute('enabled', 'true');
    else
        document.getElementById('model__RotationTimerZ').setAttribute('enabled', 'false');
}

function toggleWireframe() {
	var x3d = document.getElementsByTagName("X3D")[0];
	var runtime = x3d.runtime;
	runtime.togglePoints(true);
}




function lightSwitch(lightId) {
    var light = document.getElementById(lightId);
    if (light) {
        light.setAttribute('on', light.getAttribute('on') === 'true' ? 'false' : 'true');
    } else {
        console.error('Light element not found:', lightId);
    }
}


function adjustBackgroundColor() {
    var red = document.getElementById('red').value;
    var green = document.getElementById('green').value;
    var blue = document.getElementById('blue').value;
    var color = `rgb(${red}, ${green}, ${blue})`;
    changeBackgroundColor(color);
}

function changeBackgroundColor(color) {
    var model = document.getElementById('model3D');
    model.style.backgroundColor = color;
    var x3dBackground = model.querySelector('Background');
    if (x3dBackground) {
        x3dBackground.setAttribute('skyColor', convertHexToRGB(color));
    }
}

function clearBackgroundColor() {
    var model = document.getElementById('model3D');
    model.style.backgroundColor = ''; // Clear inline style
    var x3dBackground = model.querySelector('Background');
    if (x3dBackground) {
        x3dBackground.setAttribute('skyColor', '1 1 1'); // Set to white or default
    }
}

function convertHexToRGB(hex) {
    var r = parseInt(hex.slice(1, 3), 16) / 255;
    var g = parseInt(hex.slice(3, 5), 16) / 255;
    var b = parseInt(hex.slice(5, 7), 16) / 255;
    return `${r} ${g} ${b}`;
}



function updateRotationTimers() {
    window.rotationTimerX = document.getElementById('model__RotationTimerX');
    window.rotationTimerY = document.getElementById('model__RotationTimerY');
    window.rotationTimerZ = document.getElementById('model__RotationTimerZ');
}

function changeModel(model) {
    let modelUrl;
    switch(model) {
        case 'coke':
            modelUrl = '//users.sussex.ac.uk/~yz644/3dapp/assignment/assets/x3d/coke-2.x3d';
            break;
        case 'sprite':
            modelUrl = '//users.sussex.ac.uk/~yz644/3dapp/assignment/assets/x3d/sprite.x3d';
            break;
        case 'pepper':
            modelUrl = '//users.sussex.ac.uk/~yz644/3dapp/assignment/assets/x3d/pepper.x3d';
            break;
        default:
            modelUrl = '//users.sussex.ac.uk/~yz644/3dapp/assignment/assets/x3d/coke-2.x3d';
    }

    const modelElement = document.querySelector('#model3D Inline');
    modelElement.setAttribute('url', modelUrl);
    updateRotationTimers(); // 更新旋转计时器的引用
}



let slides = document.querySelectorAll('.home .slides-container .slide');
let index = 0;

function next(){
    slides[index].classList.remove('active');
    index = (index + 1) % slides.length;
    slides[index].classList.add('active');
}

function prev(){
    slides[index].classList.remove('active');
    index = (index - 1 + slides.length) % slides.length;
    slides[index].classList.add('active');
}

$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});

var rotateTransform;

document.addEventListener('DOMContentLoaded', function() {
    var x3dElement = document.querySelector('X3D');
    // 确保使用的是正确的事件监听方式
    if (x3dElement) {
        x3dElement.addEventListener('load', initializeViewpoints, false);
    }
});

function initializeViewpoints() {
    var x3dElement = document.querySelector('X3D');
    if (x3dElement.runtime) {
        console.log('X3D runtime is available.');
        // 根据 X_ITE 文档, 这里应该是 `runtime.getBrowser().getNode` 方法来获取 DEF 节点
        var scene = x3dElement.runtime.getBrowser().getCurrentScene();
        rotateTransform = scene.getNamedNode('RotateTransform');
        if (rotateTransform) {
            console.log('RotateTransform node found.');
            rotateTransform.setAttribute('rotation', '0 0 1 0.7853981633974483');
            console.log('Model should be rotated now.');
        } else {
            console.error('RotateTransform node not found.');
        }
    } else {
        console.error("X3D runtime is not ready or not found.");
    }
}


function switchView(viewpointId) {
    var viewpoint = document.getElementById(viewpointId);
    if (viewpoint) {
        viewpoint.setAttribute('set_bind', 'true'); // 触发视点绑定
        if (rotateTransform) {
            // 绕 Z 轴旋转 45 度
            rotateTransform.setAttribute('rotation', '0 0 1 0.7853981633974483');
        }
    } else {
        console.error("Viewpoint not found: " + viewpointId);
    }
}

$(document).ready(function(){
    $.getJSON("//users.sussex.ac.uk/~yz644/3dapp/assignment/js/text.json", function(jsonObj) {
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

        // Coca Cola history
        $('#x3dModelTitle').html(jsonObj.pageTextData[4].x3dModelTitle);
        $('#x3dCreationMethod').html(jsonObj.pageTextData[4].x3dCreationMethod);
        $('#historytitle').html('<h3>' + jsonObj.pageTextData[4].title + '</h3>');
        $('#historysubtitle').html('<h2>' + jsonObj.pageTextData[4].subTitle + '</h2>');
        $('#historytext').html('<p>' + jsonObj.pageTextData[4].description + '</p>');

        // Sprite
        $('#x3dModelTitle').html(jsonObj.pageTextData[5].x3dModelTitle);
        $('#x3dCreationMethod').html(jsonObj.pageTextData[5].x3dCreationMethod);
        $('#historytitle').html('<h3>' + jsonObj.pageTextData[5].title + '</h3>');
        $('#historysubtitle').html('<h2>' + jsonObj.pageTextData[5].subTitle + '</h2>');
        $('#historytext').html('<p>' + jsonObj.pageTextData[5].description + '</p>');
        // Dr Pepper
        $('#x3dModelTitle').html(jsonObj.pageTextData[6].x3dModelTitle);
        $('#x3dCreationMethod').html(jsonObj.pageTextData[6].x3dCreationMethod);
        $('#historytitle').html('<h3>' + jsonObj.pageTextData[6].title + '</h3>');
        $('#historysubtitle').html('<h2>' + jsonObj.pageTextData[6].subTitle + '</h2>');
        $('#historytext').html('<p>' + jsonObj.pageTextData[6].description + '</p>');
    });
});


function showPage(pageId) {
    var pages = document.querySelectorAll('.page');
    pages.forEach(function(page) {
        if (page.id === pageId) {
            page.style.display = 'block';
        } else {
            page.style.display = 'none';
        }
    });
}

document.addEventListener('DOMContentLoaded', function () {
    const letters = document.querySelectorAll('.logo h3');
    letters.forEach((letter, index) => {
        letter.style.animationDelay = `${0.1 * index}s`;
    });
});

function changeVideo(videoUrl) {
    var videoPlayer = document.getElementById('mainVideo');
    videoPlayer.src = videoUrl;
    videoPlayer.load();
    videoPlayer.play();
}


document.addEventListener('DOMContentLoaded', function () {
    // 页面加载完成后默认显示可口可乐的历史信息
    changeHistory('History of Cola');
});

function changeHistory(videoType) {
    console.log("Loading history for:", videoType);  // 调试输出
    fetch('//users.sussex.ac.uk/~yz644/3dapp/assignment/js/text.json')
        .then(response => response.json())
        .then(data => {
            const historyData = data.pageTextData.find(item => item.title === videoType);
            if (historyData) {
                document.getElementById('historytitle').innerText = historyData.title;
                document.getElementById('historysubtitle').innerText = historyData.subTitle;
                document.getElementById('historytext').innerText = historyData.description;
            } else {
                console.error('No data found for:', videoType);
            }
        })
        .catch(error => console.error('Error loading the history data:', error));
}

