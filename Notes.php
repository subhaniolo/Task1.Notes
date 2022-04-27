<?php require 'connect.php'; ?>
<!DOCTYPE html>
<html>

<head>

  <title>Ваши  заметки</title>
  <link rel="stylesheet" href="style.css">
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  
</head>

<body>

<h2 class="is-h">Введите вашу заметку</h2>

<form action="add.php" method="post">

      <input type="text" name="name" placeholder="Название заметки" class="form-control"><br>
      <input type="text" name="text" placeholder="Текст заметки" class="form-control"><br>
      <button type="submit" name="sendTask" class="btn btn-dark">Добавить</button>

</form>


<h2 class="is-h">Ваши заметки</h2>

<?
      $products = mysqli_query($connect, "SELECT * FROM `notes`");
      $products = mysqli_fetch_all($products);
      foreach($products as $product) 
      {
          echo '<p class = txt form-control>Название: '.$product[1].'<br>Текст: ' .$product[2]. '<br>Дата:'.$product[3].'
          <a href="delete.php?id='.$product[0].'"><button type="button" class="btn btn-outline-dark">Удалить</button></a>&nbsp;
          <a href="editor.php?id='.$product[0].'"><button type="button" class="btn btn-outline-secondary">Изменить</button></a></p>';
      }
    
?> 
</body>
</html>