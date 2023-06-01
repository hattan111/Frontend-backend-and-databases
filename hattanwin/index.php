<?php 

include './inc/conn.php';
include './inc/form.php';

$sql = 'SELECT * FROM users';
$result = mysqli_query($conn, $sql);
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);



mysqli_free_result($result);
mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>

<div class="container">

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 fw-normal">winner wheth hattan</h1>
      <p class="lead fw-normal">باقي على فتح التسجيل</p>
      <p class="lead fw-normal">للسسحب على نسخة مجانية من برنامج</p>
      <a class="btn btn-outline-secondary" href="#">Coming soon</a>
    </div>
    <div class="product-device shadow-sm d-none d-md-block"></div>
    <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
  </div>

  <ul class="list-group list-group-flush">
  <li class="list-group-item">An item</li>
  <li class="list-group-item">A second item</li>
  <li class="list-group-item">A third item</li>
  <li class="list-group-item">A fourth item</li>
  <li class="list-group-item">And a fifth one</li>
</ul>
<form class="mb-5" action="index.php" method="POST">

<h3>الرجاء ادخل معلوماتك</h3>
<div class="mb-3">
<label for="exampleInputEmail1" class="from-label">الاسم الاول</label>
<input type="text" name="firstName" class="from-control" id="exampleInputEmail1" aria-describedby="emailHelp"></input>
<div id="emailHelp" class="form-text error"></div>


</div>

<div class="mb-3">
<label for="exampleInputEmail1" class="from-label">الاسم الاخير</label>
<input type="text" name="lastName" class="from-control" id="exampleInputEmail1" aria-describedby="emailHelp"></input>
<div id="emailHelp" class="form-text error"></div>


</div>
<div class="mb-3">
<label for="exampleInputEmail1" class="from-label">البريد الالكتروني</label>
<input type="text" name="email" class="from-control" id="exampleInputEmail1" aria-describedby="emailHelp"></input>
<div id="emailHelp" class="form-text error"></div>


</div>

<button type="sumbit" class="btn btn-primary"></button>

</form>

<!--
<form action="index.php" method="POST">
    <input type="text" name="firstName" id="firstName" placeholder="firstName">
    <input type="text" name="lastName" id="lastName" placeholder="lastName">
    <input type="text" name="email" id="email" placeholder="email">
    <input type="submit" name="submit" value="send">
</form>
-->

<?php foreach($users as $user): ?>
    <h1><?php echo htmlspecialchars( $user['firstName']) . ' ' . htmlspecialchars( $user['lastName']) . '<br>' . htmlspecialchars( $user['email']); ?></h1>
<?php endforeach; ?>

<script src="./js/bootstrap.bundle.min.js"></script>

<script src="./js/script.js"></script>
</body>
</html>