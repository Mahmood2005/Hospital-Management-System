<html lang="en">
<head>
<title>June-hospital Appointment Form</title>
  <link rel="stylesheet" type="text/css" href="./Appointment.css" />
  <link rel="shortcut icon" href="../hand-holding-heart-solid.svg" type="image/x-icon">
</head>

<body>
  <div id="container">
    <!--This is a division tag for body container-->
    <div id="body_header">
      <!--This is a division tag for body header-->
      <h1>Appointment Request Form</h1>
      <p>Make your appointments more easier</p>

    </div>
    <form action=".//Request_appointment.php" method="post" id="appointment-form">
      <fieldset>
        <legend><span class="number">1</span>Your basic details</legend>
        <label for="name">Name*:</label>
        <input type="text" id="name" name="patient_name" placeholder="(only first names)" required>

        <label for="mail">Email*:</label>
        <input type="email" id="mail" name="email" placeholder="abc@xyz.com" required>

        <label for="tel">Contact Num:</label>
        <input type="tel" id="patient_Phone" placeholder="Include country code" name="patient_Phone" required>

        <label for="Patient_ID">Patient ID:</label>
        <input type="text" id="patient_ID" name="patient_ID" placeholder="66666">
        <span id="error" class="error"></span>


      </fieldset>

      <fieldset>
        <legend><span class="number">2</span>Appointment Details</legend>
        <label for="appointment_department">Appointment Department*:</label>
        <select id="appointment_department" name="appointment_department" required>
        <option value="#">Select Department</option>
          <option value="Emergency Department">Emergency Department (ED)</option>    
          <option value="Intensive Care Unit">Intensive Care Unit (ICU)</option>
          <option value="Pediatrics">Pediatrics</option>
          <option value="Surgery Department">Surgery Department</option>
          <option value="Geriatics">Geriatics</option>
          <option value="Orthopedics">Orthopedics</option>
          <option value="Optometry">Optometry</option>
          <option value="Gynecology">Gynecology</option>
          <option value="Pulmonology">Pulmonology</option>
          <option value="Neurology">Neurology</option>
        </select>
        <label for="appointment_description">Appointment Description:</label>
        <textarea id="appointment_description" name="appointment_description" placeholder="I wish to get an appointment with the general doctor regarding my heart." required></textarea>
        <label for="date">Date*:</label>
        <input type="date" name="date" value="" required></input>
        <br>
        <label for="time">Time*:</label>
        <input type="time" name="time" value="" required></input>
        <br>
        <label for="duration">How Long??(Minutes)</label>
        <input type="radio" name="duration" value="30" checked required> 30
        <input type="radio" name="duration" value="60" required> 60
        <input type="radio" name="duration" value="90" required> 90
        <input type="radio" name="duration" value="more" required> more
        <label for="appointment_location" style="padding-top: 30px;">Choose Appointment Location*:</label>
        <select id="appointment_location" name="appointment_location" required>
        <option value="#">Select</option>
          <option value="Online">Online</option>    
          <option value="Physical">At The Hospital</option>
        </select>
      </fieldset>
      <button type="submit">Request For Appointment</button>
    </form>
  </div>


  <script>
    document.getElementById('patient_ID').addEventListener('input', function(event) {
            // Remove non-numeric characters
            let value = event.target.value;
            value = value.replace(/\D/g, ''); // Keep only digits

            // Limit input to 5 digits
            if (value.length > 5) {
                value = value.slice(0, 5);
            }

            // Update the input field
            event.target.value = value;
        });

        document.getElementById('patient_Phone').addEventListener('input', function(event) {
            // Remove non-numeric characters
            let value = event.target.value;
            value = value.replace(/\D/g, ''); // Keep only digits

            // Limit input to 5 digits
            if (value.length > 15) {
                value = value.slice(0, 15);
            }

            // Update the input field
            event.target.value = value;
        });

        document.getElementById('appointment-form').addEventListener('submit', function(event) {
            const inputField = document.getElementById('patient_ID');
            const errorSpan = document.getElementById('error');

            if (inputField.value.length === 0) {
                errorSpan.textContent = 'Please enter your Patient ID.';
                event.preventDefault(); // Prevent form submission
            } else if (inputField.value.length > 5) {
                errorSpan.textContent = 'Number cannot exceed 5 digits.';
                event.preventDefault(); // Prevent form submission
            } else {
                errorSpan.textContent = ''; // Clear error message
            }
        });
  </script>



</body>

</html>