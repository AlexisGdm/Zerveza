const navSlide = () => {
  const burger = document.querySelector(".burger-admin");
  const nav = document.querySelector(".nav-links-admin");
  const navLinks = document.querySelectorAll(".nav-links-admin a");

  burger.addEventListener("click", () => {
    nav.classList.toggle("nav-active-admin");

    navLinks.forEach((link, index) => {
      if (link.style.animation) {
        link.style.animation = "";
      } else {
        link.style.animation = `navLinkFade-admin 0.5s ease forwards ${
          index / 7 + 0.5
        }s `;
      }
    });
    burger.classList.toggle("toggle-admin");
  });
  //
};

navSlide();
