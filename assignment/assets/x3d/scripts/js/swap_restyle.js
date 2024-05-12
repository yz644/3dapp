document.addEventListener('DOMContentLoaded', function() {
    var counter = 0; // 在这里定义counter

    var restyleLink = document.getElementById('restyleLink');
    var resetLink = document.getElementById('resetLink');
    

    if (restyleLink && resetLink) {
        restyleLink.addEventListener('click', changeLook);
        resetLink.addEventListener('click', changeBack);
    }

    function changeLook() {
        counter = (counter % 4) + 1; // 确保counter循环在1到4之间

        var body = document.getElementById('body'); // 确保这些ID是正确的
        var header = document.getElementById('header'); // 确保这些ID是正确的
        var footer = document.getElementById('footer'); // 确保这些ID是正确的

        switch (counter) {
            case 1:
                if(body && header && footer) {
                    body.style.backgroundColor = 'lightblue';
                    header.style.backgroundColor = '#FF0000';
                    footer.style.backgroundColor = '#FF9900';
                }
                break;
            case 2:
                if(body && header && footer) {
                    body.style.backgroundColor = '#FF6600';
                    header.style.backgroundColor = '#FF9999';
                    footer.style.backgroundColor = '#996699';
                }
                break;
            case 3:
                if(body && header && footer) {
                    body.style.backgroundColor = 'coral';
                    header.style.backgroundColor = 'darkcyan';
                    footer.style.backgroundColor = 'darksalmon';
                }
                break;
            case 4:
                if(body && header && footer) {
                    body.style.backgroundColor = 'lightgrey';
                    header.style.backgroundColor = 'chocolate';
                    footer.style.backgroundColor = 'dimgrey';
                }
                break;
        }
    }

    function changeBack() {
        var body = document.getElementById('body');
        var header = document.getElementById('header');
        var footer = document.getElementById('footer');
        if (body && header && footer) {
            body.style.backgroundColor = '#FFFFFF';
            header.style.backgroundColor = 'rgba(175,0,0,1)';
            footer.style.backgroundColor = 'rgba(175,0,0,1)';
        }
    }

    function resetStyles() {
        counter = 0;
        changeBack();
    }
});
