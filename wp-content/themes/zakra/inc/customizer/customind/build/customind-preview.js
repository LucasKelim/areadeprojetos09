(()=>{"use strict";var r={};function t(r){return t="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(r){return typeof r}:function(r){return r&&"function"==typeof Symbol&&r.constructor===Symbol&&r!==Symbol.prototype?"symbol":typeof r},t(r)}function e(r,e,n){return o=function(r,e){if("object"!=t(r)||!r)return r;var n=r[Symbol.toPrimitive];if(void 0!==n){var o=n.call(r,"string");if("object"!=t(o))return o;throw new TypeError("@@toPrimitive must return a primitive value.")}return String(r)}(e),(e="symbol"==t(o)?o:o+"")in r?Object.defineProperty(r,e,{value:n,enumerable:!0,configurable:!0,writable:!0}):r[e]=n,r;var o}r.n=t=>{var e=t&&t.__esModule?()=>t.default:()=>t;return r.d(e,{a:e}),e},r.d=(t,e)=>{for(var n in e)r.o(e,n)&&!r.o(t,n)&&Object.defineProperty(t,n,{enumerable:!0,get:e[n]})},r.o=(r,t)=>Object.prototype.hasOwnProperty.call(r,t);const n=window.wp.hooks,o=window.jQuery;var c=r.n(o);const i=window.lodash;var u=r.n(i);class s{constructor(r){e(this,"subscriptions",new Set),this.currentValue=r}get value(){return s.currentSubscriber&&this.subscriptions.add(s.currentSubscriber),this.currentValue}set value(r){this.currentValue=r,this.notifySubscribers()}notifySubscribers(){this.subscriptions.forEach((r=>r()))}}function a(r,t){var e=Object.keys(r);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(r);t&&(n=n.filter((function(t){return Object.getOwnPropertyDescriptor(r,t).enumerable}))),e.push.apply(e,n)}return e}function l(r){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?a(Object(n),!0).forEach((function(t){e(r,t,n[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(r,Object.getOwnPropertyDescriptors(n)):a(Object(n)).forEach((function(t){Object.defineProperty(r,t,Object.getOwnPropertyDescriptor(n,t))}))}return r}e(s,"currentSubscriber",null);var b,y=window.wp.customize,f=new s({});if(b=()=>{var r=c()("#customind-dynamic-control-css");r.length||(r=c()('<style id="customind-dynamic-control-css"></style>').appendTo(document.head));var t=Object.values(f.value).join("\n");t.length?r.text(t):r.remove()},s.currentSubscriber=b,b(),s.currentSubscriber=null,__CUSTOMIND__PREVIEW__.controls.length){var p=function(r){y(r,(function(t){t.bind((function(t){var e,o=u().trim(u().replace(r,/[^a-zA-Z0-9_.-]/g,"."),"."),c=(0,n.applyFilters)("customind.dynamic.css",(0,n.applyFilters)("customind.dynamic.".concat(o,".css"),"",t,y),t,o,y);null!==(e=f.value)&&void 0!==e&&e[o]&&f.value[o]===c||(f.value=l(l({},f.value),{},{[o]:c})),(0,n.doAction)("customind.change.".concat(o),t,y)}))}))};for(var v of __CUSTOMIND__PREVIEW__.controls)p(v)}})();