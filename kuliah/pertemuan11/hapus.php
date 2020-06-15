<?php
require 'functions.php';

// jika tidak ada ID di URL
if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

// mengambil ID dari URL
$id = $_GET['id'];

if (hapus($id) > 0) {
  echo "<script>
          alert('Data berhasil di hapus');
          document.location.href = 'index.php';
        </script>";
} else {
  echo "Data gagal di hapus!";
}
