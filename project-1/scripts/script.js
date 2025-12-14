// Image Gallery JavaScript
// This code inspired by the book, DOM Scripting by Jeremy Keith (http://domscripting.com/book/)
document.addEventListener("DOMContentLoaded", function () {
    const gallery = document.querySelector("#imageGallery");
    const links = gallery.querySelectorAll("#imageGallery a");
    console.log(links);
    for (let i = 0; i < links.length; i++) {
        links[i].addEventListener("click", function (event) {
            let source = links[i].getAttribute("href");
            const placeholder = document.querySelector("#placeHolder");
            placeholder.setAttribute("src", source);
            let text = links[i].getAttribute("title");
            console.log(text);
            const description = document.querySelector("#placeHolderDescription");
            description.textContent = text;
            event.preventDefault();
        })
    }
})