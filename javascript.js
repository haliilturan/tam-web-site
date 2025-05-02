document.addEventListener("DOMContentLoaded", () => {
    const menuItems = document.querySelectorAll("a.cd");
    const currentPage = window.location.href;
  
    menuItems.forEach(item => {
      if (currentPage.includes(item.getAttribute("href"))) {
        item.style.backgroundColor = "#ff3300"; // Highlight current page
      }
    });
  });
  document.querySelectorAll("a.cd").forEach(link => {
    link.addEventListener("click", function (event) {
      if (this.getAttribute("href").startsWith("#")) {
        event.preventDefault();
        const target = document.querySelector(this.getAttribute("href"));
        if (target) {
          target.scrollIntoView({ behavior: "smooth" });
        }
      }
    });
  });
  const footer = document.querySelector("footer");
  if (footer) {
    const year = new Date().getFullYear();
    footer.innerHTML += `<p style="color:white; text-align:center;">&copy; ${year} PGC. All rights reserved.</p>`;
  }