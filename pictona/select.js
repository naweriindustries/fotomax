/**
 * @fileOverview
 * @author Zoltan Toth
 * @version 2.1.1
 */

/**
 * @description
 * Vanilla JavaScript dropdown - a tiny (~600 bytes gzipped) select tag replacement.
 * https://github.com/zoltantothcom/vanilla-js-dropdown
 * @class
 * @param {(string|Object)} options.elem - HTML id of the select or the DOM element.
 */
var CustomSelect = function(options) {
  var buttonClasses = options.buttonClasses.concat([
    'mtn-select__title',
    'mtn-btn',
  ]);
  var elem =
      typeof options.elem === 'string'
        ? document.getElementById(options.elem)
        : options.elem,
    mainClasses = options.containerClasses,
    titleClasses = buttonClasses,
    listClass = 'mtn-select__list',
    selectedClass = 'mtn-select__selected',
    openClass = 'is-open',
    selectOptions = elem.querySelectorAll('option'),
    optionsLength = selectOptions.length;

  var dropup = options.dropup;
  var image = options.image;
  var form = options.form;

  if (image) mainClasses = mainClasses.concat(['mtn-select-image']);
  if (form) {
    mainClasses = mainClasses.concat(['mtn-select--grey']);
    titleClasses = []; // reset select classes to get form look
    titleClasses = titleClasses.concat([
      'mtn-select__title',
      'mtn-btn',
      'mtn-btn--rect',
      'mtn-btn--rect--grey',
    ]);
  }
  // creating the pseudo-select container
  var selectContainer = document.createElement('div');

  selectContainer.className = mainClasses.join(' ');

  if (elem.id) {
    selectContainer.id = 'custom-' + elem.id;
  }

  // creating the always visible main button
  var button = document.createElement('button');

  button.className = titleClasses.join(' ');
  button.textContent = selectOptions[0].textContent;

  // creating the UL
  var ul = document.createElement('ul');
  if (dropup) {
    ul.className = listClass + ' drop-up';
  } else {
    ul.className = listClass;
  }

  for (var i = 0; i < optionsLength; i++) {
    var li = document.createElement('li');
    var text = document.createTextNode(selectOptions[i].textContent);

    // Add image to list
    if (selectOptions[i].hasAttribute('data-image')) {
      var img = document.createElement('img');
      img.setAttribute('src', selectOptions[i].getAttribute('data-image'));
      li.appendChild(img);
    }
    li.appendChild(text);
    // li.innerText = selectOptions[i].textContent;
    li.setAttribute('data-value', selectOptions[i].value);
    li.setAttribute('data-index', i);

    if (selectOptions[i].getAttribute('selected') !== null) {
      li.classList.add(selectedClass);
      button.textContent = selectOptions[i].textContent;

      if (selectOptions[i].hasAttribute('data-image')) {
        button.setAttribute(
          'style',
          'background-image:url("' +
            selectOptions[i].getAttribute('data-image') +
            '")'
        );
      }
    }

    ul.appendChild(li);
  }

  // appending the button and the list
  selectContainer.appendChild(button);
  selectContainer.appendChild(ul);

  selectContainer.addEventListener('click', onClick);

  // pseudo-select is ready - append it and hide the original
  elem.parentNode.insertBefore(selectContainer, elem);
  elem.style.display = 'none';

  /**
   * Closes the current select on any click outside of it.
   *
   */
  document.addEventListener('click', function(e) {
    if (!selectContainer.contains(e.target)) close();
  });

  /**
   * Handles the clicks on current select.
   *
   * @param {object} e - The item the click occured on.
   */
  function onClick(e) {
    e.preventDefault();

    var t = e.target; // || e.srcElement; - uncomment for IE8

    if (t.className === titleClasses.join(' ')) {
      toggle();
    }
    if (t.tagName === 'LI') {
      // Add image to button
      if (t.getElementsByTagName('img')[0]) {
        var src = t.getElementsByTagName('img')[0].src;
        selectContainer
          .querySelector('.' + titleClasses.join('.'))
          .setAttribute('style', 'background-image:url("' + src + '")');
      }

      selectContainer.querySelector('.' + titleClasses.join('.')).innerText =
        t.innerText;
      elem.options.selectedIndex = t.getAttribute('data-index');

      //trigger 'change' event
      var evt = new CustomEvent('change');

      elem.dispatchEvent(evt);

      // highlight the selected
      for (var i = 0; i < optionsLength; i++) {
        ul.querySelectorAll('li')[i].classList.remove(selectedClass);
      }
      t.classList.add(selectedClass);

      close();
    }
  }

  /**
   * Toggles the open/close state of the select on title's clicks.
   *
   * @public
   */
  function toggle() {
    ul.classList.toggle(openClass);
  }

  /**
   * Opens the select.
   *
   * @public
   */
  function open() {
    ul.classList.add(openClass);
  }

  /**
   * Closes the select.
   *
   * @public
   */
  function close() {
    ul.classList.remove(openClass);
  }

  return {
    toggle: toggle,
    close: close,
    open: open,
  };
};
