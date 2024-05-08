<?php 
    include 'db.php';
    if(isset($_GET['idk'])){
        $delete = mysqli_query($conn, "DELETE FROM tb_matakuliah WHERE matakuliah_id = '".$_GET['idk']."' ");
        echo '<script>window.location="matakuliah.php"</script>';
    }
?>
