/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./assets/js/blocks/gallery.js":
/*!*************************************!*\
  !*** ./assets/js/blocks/gallery.js ***!
  \*************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/blocks */ "@wordpress/blocks");
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @wordpress/i18n */ "@wordpress/i18n");
/* harmony import */ var _wordpress_i18n__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__);
// prettier-ignore



const NAMESPACE = `tvlr/group`;
const BLOCKNAME = 'core/gallery';

const variations = [
	{
		name: 'gallery-grid',
		title: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)( 'Gallery Grid', 'tvlr' ),
		description: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)( 'Arrange images in a grid.', 'tvlr' ),
		icon: 'grid-view',
		attributes: {
			namespace: NAMESPACE,
			className: 'grid',
			layout: {
				type: 'grid',
			},
		},
		scope: [ 'block', 'inserter', 'transform' ],
		isActive: ( attributes ) => {
			return attributes.layout?.type === 'grid';
		},
	},
];

variations.forEach( ( variation ) => {
	(0,_wordpress_blocks__WEBPACK_IMPORTED_MODULE_0__.registerBlockVariation)( BLOCKNAME, variation );
} );


/***/ }),

/***/ "./assets/js/blocks/group.js":
/*!***********************************!*\
  !*** ./assets/js/blocks/group.js ***!
  \***********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/blocks */ "@wordpress/blocks");
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @wordpress/i18n */ "@wordpress/i18n");
/* harmony import */ var _wordpress_i18n__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__);
// prettier-ignore



const NAMESPACE = `tvlr/group`;
const BLOCKNAME = 'core/group';

const variations = [
	{
		name: 'group-grid',
		title: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)( 'Grid', 'tvlr' ),
		description: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)( 'Arrange blocks in a grid.', 'tvlr' ),
		icon: 'grid-view',
		attributes: {
			namespace: NAMESPACE,
			className: 'grid',
			layout: {
				type: 'grid',
			},
		},
		scope: [ 'block', 'inserter', 'transform' ],
		isActive: ( attributes ) => {
			return attributes.layout?.type === 'grid';
		},
	},
];

variations.forEach( ( variation ) => {
	(0,_wordpress_blocks__WEBPACK_IMPORTED_MODULE_0__.registerBlockVariation)( BLOCKNAME, variation );
} );


/***/ }),

/***/ "./assets/js/blocks/index.js":
/*!***********************************!*\
  !*** ./assets/js/blocks/index.js ***!
  \***********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _gallery__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./gallery */ "./assets/js/blocks/gallery.js");
/* harmony import */ var _group__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./group */ "./assets/js/blocks/group.js");
/**
 * Site Blocks JS
 */





/***/ }),

/***/ "@wordpress/blocks":
/*!********************************!*\
  !*** external ["wp","blocks"] ***!
  \********************************/
/***/ ((module) => {

module.exports = window["wp"]["blocks"];

/***/ }),

/***/ "@wordpress/i18n":
/*!******************************!*\
  !*** external ["wp","i18n"] ***!
  \******************************/
/***/ ((module) => {

module.exports = window["wp"]["i18n"];

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other modules in the chunk.
(() => {
/*!**************************!*\
  !*** ./assets/blocks.js ***!
  \**************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _js_blocks__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./js/blocks */ "./assets/js/blocks/index.js");


})();

/******/ })()
;
//# sourceMappingURL=blocks.js.map