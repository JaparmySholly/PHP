<?php include 'inc/header.php'; ?>

<?php
  $sql = 'SELECT * FROM Feedback';
  $result = mysqli_query($conn, $sql);
  $feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

    <h2 class="text-center">Pass Feedback</h2>

    <?php if(empty($feedback)): ?>
      <p class="lead mt3">There is no feddback</p>
    <?php endif; ?>

    <?php foreach($feedback as $item): ?>
     
      <div class="card my-3">
      <div class="card-body text-center">
       <?php echo $item['body']; ?>
       <div class="text-secondary mt-2">
        By  <?php echo $item  ['name']; ?> on <?php echo $item ['date']; ?>
       </div>
   </div>
   <?php endforeach; ?>

<?php include 'inc/footer.php'; ?>

