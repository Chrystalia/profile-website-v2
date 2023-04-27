"use strict";
Object.defineProperty(exports, "__esModule", {
    value: true
});
Object.defineProperty(exports, "applyImportantSelector", {
    enumerable: true,
    get: ()=>applyImportantSelector
});
const _splitAtTopLevelOnly = require("./splitAtTopLevelOnly");
function applyImportantSelector(selector, important) {
    let matches = /^(.*?)(:before|:after|::[\w-]+)(\)*)$/g.exec(selector);
    if (!matches) return `${important} ${wrapWithIs(selector)}`;
    let [, before, pseudo, brackets] = matches;
    return `${important} ${wrapWithIs(before + brackets)}${pseudo}`;
}
function wrapWithIs(selector) {
    let parts = (0, _splitAtTopLevelOnly.splitAtTopLevelOnly)(selector, " ");
    if (parts.length === 1 && parts[0].startsWith(":is(") && parts[0].endsWith(")")) {
        return selector;
    }
    return `:is(${selector})`;
}
