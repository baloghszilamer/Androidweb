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
  
  // Listen for form submit
  document.getElementById('form-signup').addEventListener('submit', submitForm);
  
  // Submit form
  function submitForm(e){
    e.preventDefault();
  
  print_r("Alma a fa alatt");
  die();
    // Get values
    var firstname = getInputVal('firstname');
    //var lastname = getInputVal('lastname');
    //var address = getInputVal('address');
    var email = getInputVal('email');
    var phone = getInputVal('phone');
    
  
    // Save message
    saveMessage(firstname,lastname, address, email, phone);
  
    // Show alert
    document.querySelector('.alert').style.display = 'block';
  
    // Hide alert after 3 seconds
    setTimeout(function(){
      document.querySelector('.alert').style.display = 'none';
    },3000);
  
    // Clear form
    document.getElementById('form-signup').reset();
  }
  
  // Function to get get form values
  function getInputVal(id){
    return document.getElementById(id).value;
  }
  
  // Save message to firebase
  function saveMessage(firstname, lastname, email, phone,id ){
    var newMessageRef = messagesRef.push();
    newMessageRef.set({
      firstname: firstname,
      lastname :lastname,
      email:email,
      phone:phone,
      id:id
      
    });
  }