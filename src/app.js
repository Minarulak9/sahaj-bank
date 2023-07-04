let options = {
  threshold: 0.9,
};
let nav = document.querySelector("nav");
let observer = new IntersectionObserver(navChange, options);
function navChange(entries) {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      nav.classList.remove("active");
    } else {
      nav.classList.add("active");
    }
  });
}
const header = document.querySelector("header");
observer.observe(header);

// nav toggler
const toggler = document.querySelector(".toggler");
const menu = document.querySelector('.menu')
toggler.addEventListener('click',(e)=>{
  console.log(e.target);
  toggler.classList.toggle('active')
  menu.classList.toggle('active')
})