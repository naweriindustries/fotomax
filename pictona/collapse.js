// Production steps of ECMA-262, Edition 6, 22.1.2.1
if (!Array.from) {
	Array.from = (function() {
		var toStr = Object.prototype.toString;
		var isCallable = function(fn) {
			return typeof fn === 'function' || toStr.call(fn) === '[object Function]';
		};
		var toInteger = function(value) {
			var number = Number(value);
			if (isNaN(number)) {
				return 0;
			}
			if (number === 0 || !isFinite(number)) {
				return number;
			}
			return (number > 0 ? 1 : -1) * Math.floor(Math.abs(number));
		};
		var maxSafeInteger = Math.pow(2, 53) - 1;
		var toLength = function(value) {
			var len = toInteger(value);
			return Math.min(Math.max(len, 0), maxSafeInteger);
		};

		// The length property of the from method is 1.
		return function from(arrayLike /*, mapFn, thisArg */) {
			// 1. Let C be the this value.
			var C = this;

			// 2. Let items be ToObject(arrayLike).
			var items = Object(arrayLike);

			// 3. ReturnIfAbrupt(items).
			if (arrayLike == null) {
				throw new TypeError(
					'Array.from requires an array-like object - not null or undefined'
				);
			}

			// 4. If mapfn is undefined, then let mapping be false.
			var mapFn = arguments.length > 1 ? arguments[1] : void undefined;
			var T;
			if (typeof mapFn !== 'undefined') {
				// 5. else
				// 5. a If IsCallable(mapfn) is false, throw a TypeError exception.
				if (!isCallable(mapFn)) {
					throw new TypeError(
						'Array.from: when provided, the second argument must be a function'
					);
				}

				// 5. b. If thisArg was supplied, let T be thisArg; else let T be undefined.
				if (arguments.length > 2) {
					T = arguments[2];
				}
			}

			// 10. Let lenValue be Get(items, "length").
			// 11. Let len be ToLength(lenValue).
			var len = toLength(items.length);

			// 13. If IsConstructor(C) is true, then
			// 13. a. Let A be the result of calling the [[Construct]] internal method
			// of C with an argument list containing the single item len.
			// 14. a. Else, Let A be ArrayCreate(len).
			var A = isCallable(C) ? Object(new C(len)) : new Array(len);

			// 16. Let k be 0.
			var k = 0;
			// 17. Repeat, while k < len… (also steps a - h)
			var kValue;
			while (k < len) {
				kValue = items[k];
				if (mapFn) {
					A[k] =
						typeof T === 'undefined'
							? mapFn(kValue, k)
							: mapFn.call(T, kValue, k);
				} else {
					A[k] = kValue;
				}
				k += 1;
			}
			// 18. Let putStatus be Put(A, "length", len, true).
			A.length = len;
			// 20. Return A.
			return A;
		};
	})();
}
// Missing forEach on NodeList for IE11
if (window.NodeList && !NodeList.prototype.forEach) {
	NodeList.prototype.forEach = Array.prototype.forEach;
}

/*
 * Find the ancestor with the specified attribute name and property
 * If the element has it, return the element otherwise return the ancestor with it
 * If the element and ancestors don't have it, return null
 */
function elementOrAncestorWithAttribute(element, attrName, attrProp) {
	if (!element || element.length === 0) {
		return false;
	}
	var parent = element;
	do {
		if (parent === document) {
			break;
		}
		if (parent.getAttribute(attrName) === attrProp) {
			return parent;
		}
	} while ((parent = parent.parentNode));
	return null;
}

// Collapse the target
var collapseIt = function(selector, cmd) {
	var targets = Array.from(document.querySelectorAll(selector));
	targets.forEach(function(target) {
		target.classList[fnmap[cmd]]('show');
	});
};

// Handler that uses various data-* attributes to trigger specific actions, mimicing bootstraps attributes
var triggers = Array.from(
	document.querySelectorAll('[data-toggle="mtn-collapse"]')
);

// Add an event listener to each trigger
for (var i = 0; i < triggers.length; i++) {
	triggers[i].addEventListener(
		'click',
		function(ev) {
			var elm = ev.target;
			var parentElm = elementOrAncestorWithAttribute(
				elm,
				'data-toggle',
				'mtn-collapse'
			);
			if (parentElm) {
				var selector = parentElm.getAttribute('data-target');
				collapseIt(selector, 'toggle');
			}
		},
		false
	);
}

var fnmap = {
	toggle: 'toggle',
	show: 'add',
	hide: 'remove',
};

// accordian collapse
('use strict');
/**
 * @author Simon Davies
 * @version 0.1.0
 * @description Simple Vanilla JavaScript Accordion
 * https://github.com/simondavies/simple-js-accordion
 * @class
 * AccordionJS
 */

/**
 * Example usage
 *
 * <!-- Accordion wrapper -->
 * <div id="the-accordion" class="mtn-accordion">
 *
 *   <!-- accordion panel -->
 *   <div class="mtn-accordion__panel">
 *      <div class="mtn-accordion__title"><a href="#"><!-- Your Panel title/link copy here --></a></div>
 *      <div class="mtn-accordion__content">
 *        <!-- your panel content to go here-->
 *      </div>
 *    </div>
 *    <!-- eo:accordion panel -->
 *
 *    <!-- add as many accordion panels as required -->
 *
 * </div>
 * <!-- eo:Accordion wrapper -->
 *
 *  to call/init
 *      <script type="text/javascript">
 *      (function(){
 *          new AccordionJS();
 *          new AccordionJS('the-accordion-two');
 *      })();
 *     </script>
 *
 * The second option enables you to assign a different id value, so you can run two or more on one page
 */

(function(window) {
	var accordion = null,
		activePanelClass = 'is-active',
		accordionPanels = null,
		currentPanel = null;

	/**
	 *  Contructor
	 *
	 * @param {containerID} to enable more than one accordion on a page
	 */
	function AccordionJS(containerID) {
		var accordionContainer = containerID ? containerID : 'the-accordion';

		accordion = document.querySelector('#' + accordionContainer);

		if (accordion !== null) {
			accordionPanels = accordion.querySelectorAll('.mtn-accordion__panel');
			if (accordionPanels.length > 0) {
				_init();
			}
		}
	}

	/**
	 * _init method
	 */
	function _init() {
		currentPanel = _checkForActivePanelOnLoad();
		accordionPanels.forEach(function(panel) {
			panel
				.querySelector('.mtn-accordion--toggle')
				.addEventListener('click', _activateSelectedPanel);
		});
	}

	/**
	 * begin the activation process on selecting a panel
	 * @param  {Event} evt
	 * @return {Void}
	 */
	function _activateSelectedPanel(evt) {
		evt.preventDefault();

		var selectedPanel = evt.currentTarget.parentElement.parentElement;

		if (currentPanel === selectedPanel) {
			_removeCurrentPanel();
			return;
		}

		_removeCurrentPanel();

		_displaySelectedPanel(selectedPanel);
	}

	/**
	 * dispaly the new selected panel
	 *
	 * @param  {Object} selectedPanel the selected panel
	 * @return {Void}
	 */
	function _displaySelectedPanel(selectedPanel) {
		selectedPanel.classList.add(activePanelClass);
		currentPanel = selectedPanel;
	}

	/**
	 * Remove the currently selected panel
	 *
	 * @return {self} to enable chaining
	 */
	function _removeCurrentPanel() {
		if (typeof currentPanel === 'undefined') return this;
		currentPanel.classList.remove(activePanelClass);
		currentPanel = undefined;
	}
	/**
	 * check to see if the user has enabled a panel on inital page load
	 * @return {Object} set to the active panel if set
	 */
	function _checkForActivePanelOnLoad() {
		for (var i = 0; i < accordionPanels.length; i++) {
			if (accordionPanels[i].classList.contains(activePanelClass)) {
				return accordionPanels[i];
			}
		}
	}

	//-- return the window object
	window.AccordionJS = AccordionJS;
})(window);
