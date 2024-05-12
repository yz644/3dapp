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
