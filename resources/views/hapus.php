<?php 
require 'functions.php';

$id = $_GET['id'];

if ( hapus ($id) > 0){

    echo "
        <script>
            document.location.href = 'indexguest.php';
        </script>
    ";

}
else{

    echo "
        <script>
            alert('data gagal di hapus!');
            document.location.href = 'indexguest.php';
        </script>
    ";
}
?>