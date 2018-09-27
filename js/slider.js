/**
 *  Delete classes "animated" and " animate class" when the animation ends
 */

function endAnimationFunction(elem) {
  //elem.classList.remove("animated", "flip");
  console.log("End action");
}

function animationEnd(el) {
  var animations = {
    animation: "animationend",
    OAnimation: "oAnimationEnd",
    MozAnimation: "mozAnimationEnd",
    WebkitAnimation: "webkitAnimationEnd"
  };

  for (var t in animations) {
    if (el.style[t] !== undefined) {
      return animations[t];
    }
  }
}

$.fn.extend({
  animateCss: function (animationName, callback) {
    var animationEnd = (function (el) {
      var animations = {
        animation: "animationend",
        OAnimation: "oAnimationEnd",
        MozAnimation: "mozAnimationEnd",
        WebkitAnimation: "webkitAnimationEnd"
      };

      for (var t in animations) {
        if (el.style[t] !== undefined) {
          return animations[t];
        }
      }
    })(document.createElement("div"));

    this.addClass("animated " + animationName).one(animationEnd, function () {
      $(this).removeClass("animated " + animationName);

      if (typeof callback === "function") callback();
    });

    return this;
  }
});

function goToElements() {
  
}

/**
 *   Click button left to slider
 */
document.getElementById("triangle-left").addEventListener("click", function () {
  var div = document.getElementById("slider");
  var elems = div.getElementsByTagName("img");
  var maxElements = elems.length;
  var count = 1;

  if (elems[0].hasAttribute("id")) {
    count = Number(elems[0].id) + 1;
  }

  for (var i = 0; i < elems.length; i++) {
    if (count == maxElements + 1) count = 1;

    if (i == 0) {
      elems[i].setAttribute("id", count);
    }

    $(elems[i]).animate({
        opacity: 0
      },
      1000,
      'linear',
      function () {
        for (var i = 0; i < elems.length; i++) {
          elems[i].setAttribute("src", "images/slider/" + count + ".png");
          $(elems[i]).css("opacity", "1");
        }
      }
    );

    count++;
  }
});

/**
 *   Click button right to slider
 */
document.getElementById("triangle-right").addEventListener("click", function () {
  var div = document.getElementById("slider");
  var elems = div.getElementsByTagName("img");
  var maxElements = elems.length;
  var count = 1;

  if (elems[0].hasAttribute("id")) {
    count = Number(elems[0].id) - 1;
  } else {
    count = maxElements;
  }

  if (count == 0) count = maxElements;

  for (var i = elems.length - 1; i >= 0; i--) {
    if (i == 0) {
      elems[i].setAttribute("id", count);
    }

    var j = count + i - maxElements;
    if (j <= 0) j = maxElements + j;
    if (count) elems[i].setAttribute("src", "images/slider/" + j + ".png");
    //$(elems[i]).animateCss("zoomIn");
  }
});