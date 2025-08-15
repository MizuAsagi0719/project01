window.addEventListener("scroll", () => {
    if (window.scrollY != 0) {
        document.querySelector("#navbar").style.boxShadow = "3px 3px 5px #37503d9c";
        document.querySelector("#navbar").style.backgroundColor = "#669688ff";
    } else {
        document.querySelector("#navbar").style.boxShadow = "none";
        document.querySelector("#navbar").style.backgroundColor = "";
    }
}
)
