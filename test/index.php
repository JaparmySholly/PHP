<?php include 'inc/header.php'; ?>

<?php 
  $name = $email = $body = '';
  $nameErr = $emailErr = $bodyErr = '';

  //Form submit
  if(isset($_POST['submit'])) {
     
    //validate name
     if(empty($_POST['name'])) {
      $nameErr = 'Name is required';
     } else {
     $name = filter_input(INPUT_POST,'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    //validate email
    if(empty($_POST['email'])) {
      $emailErr = 'Email is required';
     } else {
     $email = filter_input(INPUT_POST,'email', FILTER_SANITIZE_EMAIL);
    }

    //validate body
    if(empty($_POST['body'])) {
      $bodyErr = 'Body is required';
     } else {
     $body = filter_input(INPUT_POST,'body', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
  
  if(empty($nameErr) && empty($emailErr) && empty($bodyErr)) {   
    // Add to database
    $sql = "INSERT INTO Feedback (name, email, body) VALUES('$name', '$email', '$body')";

    if(mysqli_query($conn, $sql)) {
      //Success
      header("Location: feedback.php");
    } else {
      // Error
      echo "Error: " . mysqli_error($conn);
    }
  }
}
  ?>

    <img src="/test/img/logo.png" class="w-25 mb-3 justify-content-center align-items-center" alt="">
    <h2 class="text-center">Feedback</h2>
    <p class="lead text-center">Leave feedback for Traversy Media</p>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="mt-4 w-75 justify-content-center">
      <div class="mb-3">
        <label for="name" class="form-label ">Name</label>
        <input type="text" class="form-control is-invalid <?php echo $nameErr ? 'is-valid' : null; ?>" id="name" name="name" placeholder="Enter your name">
        <div class="invali-feddback">
          <?php echo $nameErr; ?>
        </div>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label <?php echo $emailErr ? 'is-valid' : null; ?>">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
        <div class="invali-feddback">
          <?php echo $emailErr; ?>
        </div>
      </div>
      <div class="mb-3">
        <label for="body" class="form-label <?php echo $bodyErr ? 'is-valid' : null; ?>">Feedback</label>
        <textarea class="form-control" id="body" name="body" placeholder="Enter your feedback"></textarea>
        <div class="invali-feddback">
          <?php echo $bodyErr; ?>
        </div>
      </div>
      <div class="mb-3">
        <input type="submit" name="submit" value="Send" class="btn btn-dark w-100">
      </div>
    </form>
    

<?php include 'inc/footer.php'; ?>
