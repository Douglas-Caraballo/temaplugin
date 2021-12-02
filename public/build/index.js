/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/js/hamburger.js":
/*!*****************************!*\
  !*** ./src/js/hamburger.js ***!
  \*****************************/
/***/ (() => {

eval("const hamburger =document.querySelector('#hamburger'),\n    menu = document.querySelector('#menu'),\n    close=document.querySelector('#close');\n\nhamburger.addEventListener('click',(e)=>{\n    menu.classList.toggle('AsideActivate');\n});\n\nclose.addEventListener('click',(e)=>{\n    menu.classList.toggle('AsideActivate');\n});\n\n//# sourceURL=webpack://underscores/./src/js/hamburger.js?");

/***/ }),

/***/ "./src/js/index.js":
/*!*************************!*\
  !*** ./src/js/index.js ***!
  \*************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _hamburger__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./hamburger */ \"./src/js/hamburger.js\");\n/* harmony import */ var _hamburger__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_hamburger__WEBPACK_IMPORTED_MODULE_0__);\n/* harmony import */ var _load_more__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./load-more */ \"./src/js/load-more.js\");\n/* harmony import */ var _load_more__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_load_more__WEBPACK_IMPORTED_MODULE_1__);\n\n\n\n//# sourceURL=webpack://underscores/./src/js/index.js?");

/***/ }),

/***/ "./src/js/load-more.js":
/*!*****************************!*\
  !*** ./src/js/load-more.js ***!
  \*****************************/
/***/ (() => {

eval("const LoadMore = document.getElementById('load-more');\nlet posted= document.querySelector('.ContentPost');\nlet ItemPost;\nif(posted){\n    ItemPost=posted.querySelector('.ContenPostItem');\n    LoadMore.addEventListener('click', async()=>{\n    const url = requestListPostVar.url;\n    const posts = await request_posts(url);\n    display_post(posts);\n    });\n}\n\nfunction display_post(posts){\n    posts.map(post => {\n        let NewItemPost = ItemPost.cloneNode(true);\n\n        let permalink = NewItemPost.querySelector('.PostImg a');\n        permalink.setAttribute('href', post.permalink);\n        permalink.innerHTML=post.thumbnail;\n\n        let category = NewItemPost.querySelector('.PostCategoriesName');\n        category.innerHTML=\"\";\n        console.log(post.category);\n        //let count=0;\n        post.category.map(cat =>{\n            let link = document.createElement(\"a\");\n            link.setAttribute('href',cat.taxonomy+'/'+cat.slug);\n            link.innerHTML=cat.name;\n            category.appendChild(link);\n            /*count++\n            while (count>0){\n                document.createTextNode(\"/\");\n                count=0;\n            }*/\n        })\n        category.insertAdjacentHTML('afterbegin','- ')\n        category.insertAdjacentHTML('beforeend',' -')\n\n        let title = NewItemPost.querySelector('.PostTitle a');\n        title.setAttribute('href', post.permalink);\n        title.innerHTML=post.title;\n\n        let excerpt = NewItemPost.querySelector('.PostExcerpt');\n        excerpt.innerHTML=post.excerpt;\n\n        let date = NewItemPost.querySelector('.PostInfoDate');\n        date.innerHTML=post.author+' / '+post.date;\n\n        posted.insertAdjacentElement('beforeend', NewItemPost);\n    });\n}\n\n\nasync function request_posts(url){\n    let current_page = LoadMore.dataset.currentPage;\n\n    let next_page = parseInt(current_page, 10) + 1;\n\n    LoadMore.dataset.currentPage=next_page;\n\n    const response = await fetch(`${url}?paged=${next_page}&per_page=2`);\n\n    const posts = await response.json();\n\n    return posts.posts;\n\n}\n\n//# sourceURL=webpack://underscores/./src/js/load-more.js?");

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
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = __webpack_require__("./src/js/index.js");
/******/ 	
/******/ })()
;