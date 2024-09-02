<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SignUp Form</title>
  <link rel="stylesheet" href="./Form_style.css">
</head>
<body>
  <div class="wrapper">
    <form id="Signup_Form">
      <h2>Create An Account</h2>
        <div class="input-field">
        <input type="text" name="firstname" required>
        <label>First Name</label>
      </div>
      <div class="input-field">
        <input type="text" name="lastname" required>
        <label>Last Name</label>
      </div>
      <div class="input-field">
        <input type="text" name="email" required>
        <label>E-mail</label>
      </div>
      <!-- <div class="input-field">
        <input type="text" required>
        <label>Address</label>
      </div> -->
      <input type="hidden" name="gender" id="genderValue">

      <label id="gender" class="field" for="Gender" data-value="">
    <span>Gender</span>
    <div id="gender" class="psuedo_select" name="gender">
        <span class="selected"></span>
        <ul id="gender_options" class="options">
            <li class="option" data-value="Male">Male</li>
            <li class="option" data-value="Female">Female</li>
            <li class="option" data-value="N/A">Prefer Not to Say</li>
        </ul>
    </div>
</label>

      <div class="input-field">
        <input type="password" id="password" name="password" required>
        <label>Password</label>
      </div>
      <div class="input-field">
        <input type="password" id="confirm_password" required>
        <label>Confirm password</label>
      </div>
      <div class="forget">
        <label for="remember">
          <input type="checkbox" id="remember">
          <p>Remember me</p>
        </label>
        <a href="Forgot_Password.php">Forgot password?</a>
      </div>
      <button type="submit" name="submit" onclick="SignupBtn()">Sign Up</button>
      <!-- <div class='message $message_type'>$php_errormsg</div> -->
      <div class="register">
        <p>Already have an account? <a href="./Login.php">Login</a></p>
      </div>
    </form>
  </div>



  <script src="./Form_Script.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    let previousValue = null;

    function updateSelection(selectedValue, textContent) {
        // Update the display and internal value
        document.querySelector('#gender .selected').textContent = textContent;
        document.querySelector('#gender').setAttribute('data-value', selectedValue);
        
        // Update the hidden input field with the selected gender value
        document.querySelector('input[name="gender"]').value = selectedValue;
    }

    document.querySelectorAll('#gender_options .option').forEach(function(option) {
        option.addEventListener('click', function() {
            var selectedValue = this.getAttribute('data-value');
            var textContent = this.textContent;
            
            if (selectedValue !== previousValue) {
                previousValue = selectedValue;
                updateSelection(selectedValue, textContent);
                console.log(selectedValue);
            }
        });
    });
});


function SignupBtn(){
    var input1 = document.getElementById("password").value;    
    var input2 = document.getElementById("confirm_password").value;    
    var myform = document.getElementById("Signup_Form");

    if (input1 === input2) {
      myform.action = "Submit_signup.php";
      myform.method = "post";
      myform.submit();
    }else {
      alert("Password does not match. Please try again");
    }
  }
</script>




</body>
</html>