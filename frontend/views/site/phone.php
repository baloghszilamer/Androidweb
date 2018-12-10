<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Firebase Phone Authentication</title>
  <script src="https://www.gstatic.com/firebasejs/4.3.1/firebase.js"></script>
  <script>
    // Initialize Firebase
    var config = {
    apiKey: "AIzaSyAhgdw59X1ZgcvjJpasjLpBjtjKIhPkVBY",
    authDomain: "sapiadvertiser-35f0f.firebaseapp.com",
    databaseURL: "https://sapiadvertiser-35f0f.firebaseio.com",
    projectId: "sapiadvertiser-35f0f",
    storageBucket: "sapiadvertiser-35f0f.appspot.com",
    messagingSenderId: "415702157474"
  };
  
    firebase.initializeApp(config);
  </script>
  <script src="https://cdn.firebase.com/libs/firebaseui/2.3.0/firebaseui.js"></script>
  <link type="text/css" rel="stylesheet" href="https://cdn.firebase.com/libs/firebaseui/2.3.0/firebaseui.css" />
  <link href="mobil.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
    <div id="container">
        <h3>Firebase Phone Number Auth. Demo</h3>
        <div id="loading">Loading...</div>
        <div id="loaded" class="hidden">
          <div id="main">
            <div id="user-signed-in" class="hidden">
              <div id="user-info">
                <div id="photo-container">
                  <img id="photo">
                </div>
                <div id="name"></div>
                <div id="email"></div>
                <div id="phone"></div>
                <div class="clearfix"></div>
              </div>
              <p>
                <button id="sign-out">Sign Out</button>
                <button id="delete-account">Delete account</button>
              </p>
            </div>
            <div id="user-signed-out" class="hidden">
              <h4>You are signed out.</h4>
              <div id="firebaseui-spa">
                <h3>Single Page App mode:</h3>
                <div id="firebaseui-container"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script src="app.js"></script>
  </body>
  </html>
</html>