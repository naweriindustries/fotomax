var ProgressIndicator = function(options) {
    var elem = typeof options.elem === 'string' ? document.getElementById(options.elem) : options.elem;
    var endWidth = elem.getAttribute('data-percentage');
    if (endWidth == null || isNaN(endWidth)) {
        endWidth = 0;
    }
    if (endWidth > 100) {
        endWidth = 100;
    }
    if (endWidth < 0) {
        endWidth = 0;
    }
    var startWidth = 0;
    window.onload = animateProgressIndicator();
    function animateProgressIndicator() {
        var id = setInterval(frame, 10);
        function frame() {
            if (startWidth >= endWidth) {
                clearInterval(id);
            } else {
                startWidth++;
                elem.style.width = startWidth + '%';
            }
        }
    }
};
