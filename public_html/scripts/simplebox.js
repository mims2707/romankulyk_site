// Demo example functions.
var preLoadIconOn = function () {
    var newE = document.createElement("div"),
        newB = document.createElement("div");
        newE.setAttribute("id", "simplbox-loading");
        newE.appendChild(newB);
    document.body.appendChild(newE);
},
preLoadIconOff = function () {
    var elE = document.getElementById("simplbox-loading");
    elE.parentNode.removeChild(elE);
},
overlayOn = function () {
    var newA = document.createElement("div");
    newA.setAttribute("id", "simplbox-overlay");
    document.body.appendChild(newA);
},
overlayOff = function () {
    var elA = document.getElementById("simplbox-overlay");
    elA.parentNode.removeChild(elA);
},
closeButtonOn = function (base) {
    var newE = document.createElement("div");
    newE.setAttribute("id", "simplbox-close");
    document.body.appendChild(newE);
    newE = document.getElementById("simplbox-close");
    base.API_AddEvent(newE, "click touchend", function () {
        base.API_RemoveImageElement();
        return false;
    });
},
closeButtonOff = function () {
    var elA = document.getElementById("simplbox-close");
    elA.parentNode.removeChild(elA);
},
captionOn = function (base) {
    var element = document.getElementById("simplbox-caption"),
        documentFragment = document.createDocumentFragment(),
        newElement = document.createElement("div"),
        newText = document.createTextNode(base.m_Alt);

    if (element) {
        element.parentNode.removeChild(element);
    }

    newElement.setAttribute("id", "simplbox-caption");
    newElement.appendChild(newText);
    documentFragment.appendChild(newElement);
    document.getElementsByTagName("body")[0].appendChild(documentFragment);
},
captionOff = function () {
    var element = document.getElementById("simplbox-caption");
    element.parentNode.removeChild(element);
};

// Constructor calls
// 1st row.
var A = new SimplBox(document.querySelectorAll("[data-simplbox='demo1']"), {
    quitOnDocumentClick: true
});
A.init();

// 2nd row.
var B = new SimplBox(document.querySelectorAll("[data-simplbox='demo2']"), {
    quitOnDocumentClick: true,
    onImageLoadStart: preLoadIconOn,
    onImageLoadEnd: preLoadIconOff
});
B.init();

// 3rd row.
var C = new SimplBox(document.querySelectorAll("[data-simplbox='demo3']"), {
    quitOnDocumentClick: true,
    onStart: overlayOn,
    onEnd: overlayOff,
    onImageLoadStart: preLoadIconOn,
    onImageLoadEnd: preLoadIconOff
});
C.init();

// 4th row.
var D = new SimplBox(document.querySelectorAll("[data-simplbox='demo4']"), {
    onStart: function () {
        overlayOn();
        closeButtonOn(D);
    },
    onEnd: function () {
        overlayOff();
        closeButtonOff();
    },
    onImageLoadStart: preLoadIconOn,
    onImageLoadEnd: preLoadIconOff
});
D.init();

// 5th row
var E = new SimplBox(document.querySelectorAll("[data-simplbox='demo5']"), {
    quitOnDocumentClick: false,
    onStart: function () {
        overlayOn();
        closeButtonOn(E);
    },
    onEnd: function () {
        overlayOff();
        closeButtonOff();
        captionOff();
    },
    onImageLoadStart: function () {
        preLoadIconOn();
        captionOn(E);
    },
    onImageLoadEnd: function () {
        preLoadIconOff();
    }
 });
 E.init();