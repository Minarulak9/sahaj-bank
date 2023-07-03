let options = {
  threshold: 0.90,
};
let nav = document.querySelector('nav')
let observer = new IntersectionObserver(navChange, options);
function navChange(entries) {
  entries.forEach((entry) => {
      if(entry.isIntersecting) {
        nav.classList.remove('active')
    }else{
          nav.classList.add('active')

      }
  });
}
const header = document.querySelector('header')
observer.observe(header);
