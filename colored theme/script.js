// Colors to cycle
const colors = ["white", "black", "gray"];
let index = 0;

const btn = document.getElementById("colorBtn");

btn.addEventListener("click", () => {
    index = (index + 1) % colors.length;

    const newColor = colors[index];
    document.body.style.backgroundColor = newColor;

    // If background is black → icon should be white
    btn.style.color = (newColor === "black") ? "white" : "black";
});
