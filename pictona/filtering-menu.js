// (function() {
var FilteringMenu = function(options) {
    var filterButton = typeof options.filterButton === 'string' ? document.getElementById(options.filterButton) : options.filterButton;
    var container = typeof options.filterMenu === 'string' ? document.getElementById(options.filterMenu) : options.filterMenu;
    var selectedFilters = typeof options.selectedFilters === 'string' ? document.getElementById(options.selectedFilters) : options.selectedFilters;
    // Event listner on filter button click
    // var filterButton = document.getElementById('filter-button');
    if (!!filterButton) {
        filterButton.addEventListener('click', function() {
            toggleFilter(filterButton, container);
        });
        //  Initialise the carousel for each filter category
        var elem = document.querySelectorAll('.carousel');
        var flkty = [];
        for (var i = 0; i < elem.length; i++) {
            flkty[i] = new Flickity(elem[i], {
                // options
                cellAlign: 'left',
                wrapAround: false,
                contain: true,
                prevNextButtons: false,
                pageDots: false
            });
        }
        // Handle the filter option click
        for (var i = 0; i < flkty.length; i++) {
            flkty[i].on('staticClick', function(event, pointer, cellElement, cellIndex) {
                if (cellElement) {
                    if (cellElement.classList.contains('mtn-pill--selectable--selected')) {
                        removeFilterOption(cellElement, cellIndex);
                    } else {
                        addFilterOption(cellElement, cellIndex, selectedFilters);
                    }
                }
            });
        }
    }
};

// Toggle the display state of the filter container
toggleFilter = function(filterButton, container) {
    var containerStyle = window.getComputedStyle(container, null);
    //  Toggle button text and
    if (containerStyle.display === 'none') {
        container.setAttribute('style', 'display:block;');
        filterButton.innerHTML = filterButton.innerHTML.replaceAll({ Show: 'Hide', keyboard_arrow_down: 'keyboard_arrow_up' });
    } else {
        container.setAttribute('style', 'display:none;');
        filterButton.innerHTML = filterButton.innerHTML.replaceAll({ Hide: 'Show', keyboard_arrow_up: 'keyboard_arrow_down' });
    }
};

addFilterOption = function(el, index, filterContainer) {
    // Create elements
    var button = document.createElement('button');
    var icon = document.createElement('i');
    var buttonId = 'filter-' + generateId(10);

    // Add selected class to element
    el.classList.add('mtn-pill--selectable--selected');
    // Add data id attr to element
    el.setAttribute('data-id', buttonId);

    // Add button and icon classes
    button.className = 'mtn-pill mtn-pill--dismissible mtn-btn--text-right-icon';
    // Create a unique id to track filter
    button.id = buttonId;
    button.innerText = el.innerText;
    icon.className = 'material-icons';
    icon.innerText = 'clear';
    // Add icon to button
    button.appendChild(icon);
    // Add button to selected filter
    filterContainer.appendChild(button);
    // Add event listner
    document.getElementById(buttonId).addEventListener('click', function() {
        var selectedFilter = document.querySelector('[data-id="' + buttonId + '"]');
        selectedFilter.classList.remove('mtn-pill--selectable--selected');
        button.remove();
    });
};
removeFilterOption = function(el, index) {
    // Remove selected class
    el.classList.remove('mtn-pill--selectable--selected');
    // Remove selected filter
    document.getElementById(el.getAttribute('data-id')).remove();
};
// })();

String.prototype.replaceAll = function(obj) {
    var str = this;
    for (var x in obj) {
        str = str.replace(new RegExp(x, 'g'), obj[x]);
    }
    return str;
};

var generateId = function(len) {
    var id = '';
    var mix = 'abcdefghijklmnopqrstuvwxyz0123456789';
    for (var i = 0; i < len; i++) {
        id += mix.charAt(Math.floor(Math.random() * mix.length));
    }
    return id;
};
