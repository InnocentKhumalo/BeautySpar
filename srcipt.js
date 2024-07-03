function openPrices() {
    focus.getElementsByClassName('price');
}
function openContact() {
    
}
function openabout() {
   window.document.location.href = "about.html";
}

function openappointment() {
   window.document.location.href = "appointment.php";
}

function sidebar() {    
   const sidebar = document.querySelector('.sidebar');
   sidebar.style.display = 'flex';
}
function hideSidebar() {
   const sidebar = document.querySelector('.sidebar');
   sidebar.style.display = 'none';
}


let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

slideIndex++;
if (slideIndex > slides.length) {slideIndex = 1}
slides[slideIndex-1].style.display = "block";
setTimeout(showSlides, 12000);
}