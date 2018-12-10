var config = {
    apiKey: "AIzaSyAhgdw59X1ZgcvjJpasjLpBjtjKIhPkVBY",
    authDomain: "sapiadvertiser-35f0f.firebaseapp.com",
    databaseURL: "https://sapiadvertiser-35f0f.firebaseio.com",
    projectId: "sapiadvertiser-35f0f",
    storageBucket: "sapiadvertiser-35f0f.appspot.com",
    messagingSenderId: "415702157474"
  };
  firebase.initializeApp(config);
  
  // Reference messages collection
  var messagesRef = firebase.database().ref('users');
  //var user = firebase.auth().currentUser().uid;
  function getUiConfig() {
    return {
      'callbacks': {
        // Called when the user has been successfully signed in.
        'signInSuccess': function(user, credential, redirectUrl) {
          handleSignedInUser(user);
          // Do not redirect.
          return false;
        }
      },
      // Opens IDP Providers sign-in flow in a popup.
      'signInFlow': 'popup',
      'signInOptions': [
        // The Provider you need for your app. We need the Phone Auth
        firebase.auth.TwitterAuthProvider.PROVIDER_ID,
        {
          provider: firebase.auth.PhoneAuthProvider.PROVIDER_ID,
          recaptchaParameters: {
            type: 'image', // another option is 'audio'
            size: 'invisible', // other options are 'normal' or 'compact'
            badge: 'bottomleft' // 'bottomright' or 'inline' applies to invisible.
          }
        }
      ],
      // Terms of service url.
      'tosUrl': 'https://www.google.com'
    };
  }
  
  

  // Listen for form submit
  document.getElementById('form-signup').addEventListener('submit', submitForm);
  function getInputVal(id){
    return document.getElementById(id).value;
  }
 
  
  // Submit form
  function submitForm(e){
    e.preventDefault();
  
    // Get values
    var username = getInputVal('signupform-username');
    //var lastname = getInputVal('lastname');
    //var address = getInputVal('address');
    var email = getInputVal('signupform-email');
    var mobilnumber = getInputVal('signupform-mobilnumber');
    
    var password =getInputVal('signupform-password');
    
    
  
    // Save message
    saveMessage(username,  email, mobilnumber,password);
  
    // Show alert
     document.querySelector('.alert').style.display = 'block';
  
    // // Hide alert after 3 seconds
     setTimeout(function(){
       document.querySelector('.alert').style.display = 'none';
     },3000);
  
    // Clear form
    document.getElementById('form-signup').reset();
  }
  
  // Function to get get form values
  
  
  // Save message to firebase
  function saveMessage(username, email, mobilnumber,password ){
    var newMessageRef = messagesRef.push();
    newMessageRef.set({
      username:username,
      email:email,
      mobilnumber:mobilnumber,
      password:password
      
    });
  }