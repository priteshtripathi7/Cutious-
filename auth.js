const signupform = document.querySelector("#signup-form");

signupform.addEventListener('submit', (e) => {
    e.preventDefault();
    let email = signupform['signup-email'].value;
    let password = signupform['signup-password'].value;

    // signup the user
    auth.createUserWithEmailAndPassword(email, password).then(cred => {
        console.log(cred);
    })
    .catch(() => {
        alert('Email already in use...!!');
        signupform['signup-email'].focus();
    })
})

// const logout = document.querySelector('#logout');

// logout.addEventListener('click', (e) => {
//     e.preventDefault();
//     auth.signOut().then(() => {
//         console.log("Log out");
//     })
// })
