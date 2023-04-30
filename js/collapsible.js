var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function () {
    this.classList.toggle("!bg-ceria-accent");
    this.classList.toggle("!dark:bg-ceria-accent");
    this.classList.toggle("!text-ceria-light");
    this.classList.toggle("!rounded-b-none");
    var icon = this.querySelector(".icon");
    icon.classList.toggle("rotate-90");
    icon.classList.toggle("!fill-ceria-light");
    var content = this.nextElementSibling;
    if (content.style.maxHeight) {
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    }
  });
}
