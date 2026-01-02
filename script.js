<script>
const images = [
  "Anhweb/sp1.webp",
  "Anhweb/sp2.webp",
  "Anhweb/sp3.webp",
  "Anhweb/sp4.webp"
];

let current = 0;

function updateImage() {
  document.getElementById("mainImage").src = images[current];
  document.querySelectorAll(".thumb-list img").forEach((img, i) => {
    img.classList.toggle("active", i === current);
  });
}

function nextImage() {
  current = (current + 1) % images.length;
  updateImage();
}

function prevImage() {
  current = (current - 1 + images.length) % images.length;
  updateImage();
}

function selectImage(index) {
  current = index;
  updateImage();
}

function scrollThumb(dir) {
  document.getElementById("thumbList").scrollLeft += dir * 80;
}
</script>
