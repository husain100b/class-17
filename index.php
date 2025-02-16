<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Tailwind CSS Form</title>
  </head>
  <body class="bg-gray-200 p-6">
      <div class="max-w-md mx-auto bg-white p-8 border rounded-md shadow-md">
          <h2 class="text-2xl font-semibold md-4">Example From</h2>
          
          <?php  

            $name = '';
            $gender = '';
            $subscribe = [];
            $datepicker = '';
            $timepicker = '';
            $options = [];
            $country = '';

            // Check if the form is submited
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
              $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
              $gender = isset($_POST['gender']) ? htmlspecialchars($_POST['gender']) : '';
              $subscribe = isset($_POST["subscribe"]) ? $_POST["subscribe"] : [];
              $datepicker = isset($_POST['datepicker']) ? htmlspecialchars($_POST['datepicker']) : '';
              $timepicker = isset($_POST['timepicker']) ? htmlspecialchars($_POST['timepicker']) : '';
              $options = isset($_POST['options']) ? $_POST['options'] : [];
              $country = isset($_POST['country']) ? htmlspecialchars($_POST['country']) : '';
            }

            echo '<div class="mb-6">';
            echo '<ul>';
            echo '<li><strong>Name:</strong> '.$name.'</li>' ;
            echo '<li><strong>Gender:</strong> '.$gender.'</li>' ;
            echo '<li><strong>Subscribe:</strong> '.implode(', ', $subscribe).'</li>' ;
            echo '<li><strong>Datepicker:</strong> '.$datepicker.'</li>' ;
            echo '<li><strong>Timepicker:</strong> '.$timepicker.'</li>' ;
            echo '<li><strong>Options:</strong> '. implode(',',$options).'</li>' ;
            echo '<li><strong>Country:</strong> '.$country.'</li>' ;
            echo '</ul>';
            echo '</div>';

          ?>


          <form action="#" method="POST">
              <!-- Text input -->
              <!-- Text input -->
              <div class="md-4">
                  <label for="name" class="block text-sm font-medium text-gray-600">Name</label>
                  <input type="text" id="name" value="<?php echo $name ?>" name="name" class="mt-1 p-2 w-2 w-full border rounded-md">
              </div>
      
              <!-- Radio Buttons -->
              <div class="md-4">
                  <label for="gender" class="block text-sm font-medium text-gray-600">Gender</label>
                  <div class="mt-1 space-x-4">
                      <label for="inline-flex items-center">
                          <input type="radio" name="gender" value="male" <?php echo $gender === 'male' ? 'checked' : ''?> class="from-radio text-indigo-600">
                          <span class="ml-2">Male</span>
                      </label>
                      <label for="inline-flex items-center">
                          <input type="radio" name="gender" value="female" <?php echo $gender === 'female' ? 'checked' : ''?> class="from-radio text-indigo-600">
                          <span class="ml-2">Female</span>
                      </label>
                  </div>
              </div>

              
                <!-- Multi-checkbox -->
                <div class="mb-4">
                  <label for="subscribe"  class="block text-sm font-medium text-gray-600">Subscribe to Newsletter</label>
                  <div class="space-y-2">
                      <label class="inline-flex items-center">
                          <input type="checkbox" name="subscribe[]" value="checkbox1" class="form-checkbox text-indigo-600" <?php echo in_array('checkbox1', $subscribe) ? 'checked' : ''; ?>>
                          <span class="ml-2">Checkbox 1</span>
                      </label>
                      <label class="inline-flex items-center">
                          <input type="checkbox" name="subscribe[]" value="checkbox2" class="form-checkbox text-indigo-600" <?php echo in_array('checkbox2', $subscribe) ? 'checked' : ''; ?>>
                          <span class="ml-2">Checkbox 2</span>
                      </label>
                      <label class="inline-flex items-center">
                          <input type="checkbox" name="subscribe[]" value="checkbox3" class="form-checkbox text-indigo-600" <?php echo in_array('checkbox3', $subscribe) ? 'checked' : ''; ?>>
                          <span class="ml-2">Checkbox 3</span>
                      </label>
                  </div>
              </div>
              <!-- Date Picker -->
              <div class="mb-4">
                  <label for="datepicker" class="block text-sm font-medium text-gray-600">Pick a Date</label>
                  <input type="text" id="datepicker" name="datepicker" class="mt-1 p-2 w-full border rounded-md" value="<?php echo $datepicker ?>">
              </div>
              <!-- Time Picker -->
              <div class="mb-4">
                  <label for="timepicker" class="block text-sm font-medium text-gray-600">Pick a Time</label>
                  <input type="text" id="timepicker" name="timepicker" class="mt-1 p-2 w-full border rounded-md" value="<?php echo $timepicker ?>">
              </div>

              <!-- Multiselect Dropdown using Select2 -->
              <div class="mb-4">
                  <label for="options" class="block text-sm font-medium text-gray-600">Select Options</label>
                  <select id="options" name="options[]" class="mt-1 p-2 w-full border rounded-md" multiple>
                    <option value="option1"<?php echo in_array('option1',$options) ? 'selected' : '' ?>>Option 1</option>
                    <option value="option2"<?php echo in_array('option2',$options) ? 'selected' : '' ?>>Option 2</option>
                    <option value="option3"<?php echo in_array('option3',$options) ? 'selected' : '' ?>>Option 3</option>
                    <option value="option4"<?php echo in_array('option4',$options) ? 'selected' : '' ?>>Option 4</option>
                    <option value="option5"<?php echo in_array('option5',$options) ? 'selected' : '' ?>>Option 5</option>
                    <option value="option6"<?php echo in_array('option6',$options) ? 'selected' : '' ?>>Option 6</option>
                  </select>
              </div>
              <!-- Select Dropdown -->
              <div class="mb-4">
                  <label for="country" class="block text-sm font-medium text-gray-600">Country</label>
                  <select id="country" name="country" class="mt-1 p-2 w-full border rounded-md">
                    <option value="usa"<?php echo ($country === 'usa') ? 'selected' : ''; ?>>United States</option>
                    <option value="canada"<?php echo ($country === 'canada') ? 'selected' : ''; ?>>Canada</option>
                    <option value="uk"<?php echo ($country === 'uk') ? 'selected' : ''; ?>>United Kingdom</option>
                    <option value="bd"<?php echo ($country === 'bd') ? 'selected' : ''; ?>>Bangladesh</option>
                    <option value="india"<?php echo ($country === 'india') ? 'selected' : ''; ?>></option>
                  </select>
              </div>

              <!-- Submit Button -->
              <div class="mt-6">
                  <button type="submit" class="bg-indigo-600 text-white p-2 rounded-md">Submit</button>
              </div>
          </form>
      </div>   


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
      $(document).ready(function() {
        // Initialize Flatpickr for the date and time pickers
        flatpickr("#datepicker", {
            enableTime: false,
            dateFormat: "Y-m-d",
        });

        flatpickr("#timepicker",{
          enableTime: true,
          noCalendar: true,
          dateFormat: "H:i",
        });

        $('#options').select2();
      });
    </script>
  </body>
</html>