let activePage = window.location.pathname
let links = document.querySelectorAll("nav a")
links.forEach(link => 
{
    if (link.href.includes(activePage))
    {
        link.classList.add("active")
       
    }
}
);