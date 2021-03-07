"use strict";

/**nav bar shrink */
window.onscroll = function () {
  scrollshrinkbar();
};

function scrollshrinkbar() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("navbar").className = "navbar-shrink navbar navbar-expand-md navbar-light main-navigation";
    document.getElementById("logo").className = "logo-shrink";
  } else {
    document.getElementById("logo").className = "logo";
    document.getElementById("navbar").className = "navbar navbar-normal navbar-expand-md navbar-light main-navigation";
  }
}