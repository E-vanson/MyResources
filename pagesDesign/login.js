//  login button
const loginBtn = document.getElementById("login-btn")

loginBtn.addEventListener("click", () => {
    document.getElementById("login-link").click()
})

// password visibilty
const passwordVisibility = document.getElementById("see-btn")
const visibilityLine = document.querySelector(".visibility-line")
const userPassword = document.querySelector(".user-password")

passwordVisibility.addEventListener("click", () => {
    if(visibilityLine.style.visibility === "hidden"){
        visibilityLine.style.visibility = "visible"
    }else{
        visibilityLine.style.visibility = "hidden"
    }

    if(userPassword.type === "password"){
        userPassword.type = "text"
    }else{
        userPassword.type = "password"
    }
})

// Google sign in
const googleBtn = document.querySelector(".google-btn")

googleBtn.addEventListener("click", () => {
    document.getElementById("google-signin").click()
    
})
