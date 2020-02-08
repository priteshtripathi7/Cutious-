
const login = document.querySelector("#login-form");

login.addEventListener('submit', (e) => {
    e.preventDefault();
    let email = login['login-email'].value;
    let password = login['login-password'].value;

    // login the user
    auth.signInWithEmailAndPassword(email, password).then(cred => {
        console.group(cred.user);
    })
    .catch(() => {
        alert("Wrong credentials!!!");
        login['login-email'].focus();
    })
})