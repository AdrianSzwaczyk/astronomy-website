const nav = document.getElementById("nav");
const text = document.querySelectorAll("p, span, label, h1, h2, a");
const menu = document.querySelectorAll("div.el, #description, .planetmenu");
const div = document.createElement("div");
const p = document.createElement("p");
const node = document.createTextNode("High Contrast");
const active = document.querySelector("#bc");

p.classList.add("menu");
div.setAttribute("id","createdDiv");
p.appendChild(node);
div.appendChild(p);
div.classList.add("el", "sitenav", "contrast");
div.style.bottom = "3%";
div.style.right = "-11%";
div.style.width = "10%";
div.style.position = "fixed";
nav.appendChild(div);
div.style.fontSize = "1.2vw";
div.style.textAlign = "center";

div.addEventListener('click', function() {
    div.classList.toggle("highContrast");
    if (div.classList.contains("highContrast")) {
        node.textContent = "Normal";
        sessionStorage.setItem("contrast", "yes");
    }
    else {
        node.textContent = "High Contrast";
        sessionStorage.setItem("contrast", "no");
    }
    text.forEach(element => {
        element.classList.toggle("black");
    }); 
    menu.forEach(element => {
        element.classList.toggle("white");
    }); 
    if(active) {
        active.classList.add("actblack");
    };
});


document.body.onload = function() {
    if(sessionStorage.getItem("contrast") === "yes") {
        node.textContent = "Normal";
        div.classList.add("highContrast");
        text.forEach(element => {
            element.classList.add("black");
        }); 
        menu.forEach(element => {
            element.classList.add("white");
        }); 
        if(active) {
            active.classList.add("actblack");
        };
    }
};
