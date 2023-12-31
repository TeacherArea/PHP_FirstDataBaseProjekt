<?php include 'inc/header.php'; ?>

<?php
$sql = 'SELECT * FROM feedback';
$result = mysqli_query($conn, $sql);
$feeds = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<h2>Feedback</h2>
<?php if (empty($feeds)) : ?>
  <p class="lead mt3">No feedback yet.</p>
<?php endif; ?>

<?php foreach ($feeds as $item) : ?>
  <div class="card my-3 mt-3">
    <div class="card-body text-center">
      <?php echo $item['msg'] ?>
      <div class="text-secondary">
        <?php echo ' – ' . $item['name'] ?><br>
        <?php echo $item['email'] ?>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="small text-center align-self-start fst-italic"><?php echo $item['date']; ?></div>
    </div>
  </div>

  <?php endforeach; ?>
<div class="card mt-5" style="width: 18rem;">
  <img src="img/einstein.jpg" class="card-img-top" alt="Photo of Albert Einstein">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<?php include 'inc/footer.php'; ?>