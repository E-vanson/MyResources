//  triggers the visibility of the password 
const userPassword1 = document.querySelector(".user-password-1")
const userPassword2 = document.querySelector(".user-password-2")
const visibilityLine1 = document.querySelector(".visibility-line-1")
const visibilityLine2 = document.querySelector(".visibility-line-2")
const seeBtn1 = document.getElementById("see-btn-1")
const seeBtn2 = document.getElementById("see-btn-2")

seeBtn1.addEventListener("click", () => {
     if (visibilityLine1.style.visibility === "hidden") {
        visibilityLine1.style.visibility = "visible"
     }else{
        visibilityLine1.style.visibility = "hidden"
     }
     if(userPassword1.type === "password"){
        userPassword1.type = "text"
     }else{
        userPassword1.type = "password"
     }
})

seeBtn2.addEventListener("click", () => {
    if (visibilityLine2.style.visibility === "hidden") {
        visibilityLine2.style.visibility = "visible"
     }else{
        visibilityLine2.style.visibility = "hidden"
     }

     if(userPassword2.type === "password"){
        userPassword2.type = "text"
     }else{
        userPassword2.type = "password"
     }
})


// sign button
const signinBtn = document.getElementById("signin-btn")

signinBtn.addEventListener("click", () => {
    const signinLink = document.getElementById("signin-link")
    signinLink.click()
})

