<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap Simple Login Form</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
        <link rel="stylesheet" href="./../css/index.css">
        <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@300&family=Gotu&display=swap" rel="stylesheet">
    </head>
<body>
    <div class="backGround">
        <img src="./../img/index(2).jpg">
    </div>

    <h1 class="display-1 text-center">Cautious</h1>
    
    <div class="login-form">
        <form id="login-form">
            <h2 class="text-center" style="color: whitesmoke;">Log in</h2>       
            <div class="form-group">
                <input type="text" id="login-email" class="form-control" placeholder="Email" required="required">
            </div>
            <div class="form-group">
                <input type="password" id="login-password" class="form-control" placeholder="Password" required="required">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary btn-block" value="Login">
            </div>        
        </form>
        <p class="text-center" style="font-size: 20px;"><a href="signup.php"><b>Create an Account</b></a></p>
    </div>
    
    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/7.8.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.8.1/firebase-auth.js"></script>

    <!-- TODO: Add SDKs for Firebase products that you want to use
        https://firebase.google.com/docs/web/setup#available-libraries -->
    <script src="https://www.gstatic.com/firebasejs/7.8.1/firebase-analytics.js"></script>

    <script>
    // Your web app's Firebase configuration
    var firebaseConfig = {
        apiKey: "AIzaSyD9lJGvpzFYY3ctmcRGdLdJaAhNdAyhS5M",
        authDomain: "cautious-8b6e4.firebaseapp.com",
        databaseURL: "https://cautious-8b6e4.firebaseio.com",
        projectId: "cautious-8b6e4",
        storageBucket: "cautious-8b6e4.appspot.com",
        messagingSenderId: "190211129776",
        appId: "1:190211129776:web:243827c2f4a21f6a17d675",
        measurementId: "G-33CJ4B6B1X"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
    firebase.analytics();
    const auth = firebase.auth();
    </script>

    <script src="./../js/authLogin.js"></script>
    <script src="./../js/index.js"></script>
</body>
</html>                                		                            