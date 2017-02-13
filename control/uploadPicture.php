<?php
  error_log(print_r($_FILES, true));
  $uploaddir = '../images/profPicture/';
  $uploadfile = $uploaddir . basename($_FILES['imgProfile']['name']);
  $status = null;

  if (move_uploaded_file($_FILES['imgProfile']['tmp_name'], $uploadfile)) {
      header('Location: profile.php');
  } else {
      header('Location: socios.php');
  }
?>
