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
            modelUrl = 'assets/x3d/coke-2.x3d';
            break;
        case 'sprite':
            modelUrl = 'assets/x3d/sprite.x3d';
            break;
        case 'pepper':
            modelUrl = 'assets/x3d/pepper.x3d';
            break;
        default:
            modelUrl = 'assets/x3d/coke-2.x3d';
    }

    const modelElement = document.querySelector('#model3D Inline');
    modelElement.setAttribute('url', modelUrl);
    updateRotationTimers(); // 更新旋转计时器的引用
}
