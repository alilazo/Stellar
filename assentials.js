$(function() {
    console.log("Made by: Amado Lazo");
});

function w3_open() {
    document.getElementById("mySidebar").classList.add("w3-animate-left");
    document.getElementById("mySidebar").style.width = "100%";
    document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
    document.getElementById("mySidebar").classList.remove("w3-animate-left");
    document.getElementById("mySidebar").style.display = "none";
}