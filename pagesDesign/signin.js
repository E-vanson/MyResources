const userPassword = document.querySelector(".user-password")
const visibilityLine1 = document.querySelector(".visibility-line-1")
const visibilityLine2 = document.querySelector(".visibility-line-2")
const seeBtn1 = document.getElementById("see-btn-1")
const seeBtn2 = document.getElementById("see-btn-2")

seeBtn1.addEventListener("click", () => {
    visibilityLine1.style.visibility = "visible" ? "hidden" : "visible"
})

seeBtn2.addEventListener("click", () => {
    visibilityLine2.style.visibility = "visible" ? "hidden" : "visible"
})

