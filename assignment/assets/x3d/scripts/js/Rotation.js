document.querySelector('X3D').addEventListener('x3dload', function() {
    console.log('X3D fully loaded');
    setupEvents();
});

window.onload = function() {
    setTimeout(() => {
        setupEvents();
    }, 1000); // 延时 1 秒以等待 X3D 完全加载
};

function setupEvents() {
    var rotationTimer = document.getElementById('RotationTimer');
    if (rotationTimer) {
        console.log("RotationTimer found.");
    } else {
        console.error("RotationTimer not found.");
    }
}

function spin() {
    var rotationTimer = document.getElementById('RotationTimer');
    if (rotationTimer) {
        spinning = !spinning;
        rotationTimer.setAttribute('enabled', spinning.toString());
    } else {
        console.error("RotationTimer not found!");
    }
}
function stopRotation() {
    spinning = false;
    document.getElementById('RotationTimer').setAttribute('enabled', spinning.toString());
}

function animateModel() {
    if (document.getElementById('RotationTimer').getAttribute('enabled') != 'true')
        document.getElementById('RotationTimer').setAttribute('enabled', 'true');
    else
        document.getElementById('RotationTimer').setAttribute('enabled', 'false');
}
