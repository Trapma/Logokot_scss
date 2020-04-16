var bar = document.getElementsByClassName("block-service__button-bar");
var i;

for (i = 0; i < bar.length; i++) {
  bar[i].addEventListener("click", function() {
    this.classList.toggle("block-service__active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}
