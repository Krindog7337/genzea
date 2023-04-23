function readMore(num) {
  var dots = document.getElementById("dots" + num);
  var selengkapnya = document.getElementById("selengkapnya" + num);
  var readMore = document.getElementById("readMore" + num);

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    readMore.innerHTML = "Baca selengkapnya";
    selengkapnya.style.display = "none";
  } else {
    dots.style.display = "none";
    readMore.innerHTML = "Baca lebih sedikit";
    selengkapnya.style.display = "inline";
  }
}

document
  .querySelectorAll("[id^='selengkapnya']")
  .forEach(function (selengkapnya) {
    selengkapnya.style.display = "none";
  });
