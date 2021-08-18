/*
 * Carousel JS
 */

var easing = "cubic-bezier(0,.65,.22,1.09)";
var speed = 300;
var transient = {}; // Empty object where we can store current item's index before drag
var events;
var onDrag;
var onDragged;


jQuery.noConflict();
(function($){
    onDrag = function (event) {
        this.initialCurrent = event.relatedTarget.current();
        this.owlId = event.target;
    };
    
    onDragged = function (event) {
        var owl = event.relatedTarget;
        var draggedCurrent = owl.current();
    
        if (draggedCurrent > this.initialCurrent) {
            owl.current(this.initialCurrent);
            owl.next();
        } else if (draggedCurrent < this.initialCurrent) {
            owl.current(this.initialCurrent);
            owl.prev();
        }
    };
    
    events = {
        onDrag: onDrag.bind(transient),
        onDragged: onDragged.bind(transient),
    };
})(jQuery);
