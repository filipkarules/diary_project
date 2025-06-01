document.addEventListener("DOMContentLoaded", ()=> {
    const form = document.getElementById("comment-form");
    const nameInput = form.querySelector(".name");
    const textInput = form.querySelector(".comment-inside");
    const commentSection = document.querySelector(".comment-section");
    
    document.getElementById("clear-comments").addEventListener("click", () => {
        document.querySelector(".comment-section").innerHTML = `<h2>Комментарии (<span id="count-comments">0</span>)</h2>`;
        localStorage.removeItem("comments");
        savedComments.length = 0;
        //location.reload();
    }); 

const savedComments = JSON.parse(localStorage.getItem("comments")) || [];
savedComments.forEach(displayComment);
document.getElementById("count-comments").textContent = savedComments.length.toString();


form.addEventListener("submit", function(e) {

const nameOriginal = nameInput.value.trim();
const textOriginal = textInput.value.trim();

if (nameOriginal === "" || textOriginal === "") return;

const comment = {nameOriginal, textOriginal};

savedComments.push(comment);
localStorage.setItem("comments", JSON.stringify(savedComments));
document.getElementById("count-comments").textContent = savedComments.length.toString();

displayComment(comment);

nameInput.value = "";
textInput.value = "";
});


function displayComment({ nameOriginal, textOriginal }) {
    const container = document.createElement("div");
    container.classList.add("comment");

    const h3 = document.createElement("h3");
    h3.textContent  = nameOriginal;

    const p = document.createElement("p");
    p.textContent = textOriginal;

    container.appendChild(h3);
    container.appendChild(p);

    commentSection.appendChild(container);
}
   

});
