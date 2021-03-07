/**comando shadow */
var overflow = document.getElementById("overflowbox");

overflow.onscroll = function () {
  scrollshadowbox();
};

function scrollshadowbox() {
  if (overflow.scrollTop > 40) {
    document.getElementById("overflowbox").className = "shadow-bottom qs-overflow row";
  } else {
    document.getElementById("overflowbox").className = "shadow-top qs-overflow row";
  }
}