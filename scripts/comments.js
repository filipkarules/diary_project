console.log("JS is working!");

document.getElementById("comment-form").addEventListener("submit", function(e) {
    e.preventDefault();

    const name = document.querySelector(".name").value.trim();
    const text = document.querySelector(".comment-inside").value.trim();

    if (text === "" || name === "") return;


    const comment = document.createElement("div");
    const namer = document.createElement("h3");
    const texter = document.createElement("p");

    namer.textContent = name;
    texter.textContent = text;

    comment.appendChild(namer);
    comment.appendChild(texter);

    document.querySelector(".comment-section").appendChild(comment);

    document.querySelector(".name").value = "";
    document.querySelector(".comment-inside").value = "";
})