<?php 
include "header.php";
?> 
//Isi atau Content 
//http://localhost/lat3/index.php
//http://localhost/lat3/index.php?menu=1
<div style=margin-top:50px>
    <?php
    if(isset($_GET['menu'])){
        if($_GET['menu']==1){
            include "layanan.php";
        }else if($_GET['menu']==2){
            include "project.php";
        }else if($_GET['menu']==3){
            include "tentangkami.php";
        }else if($_GET['menu']==4){
            include "kontak.php";
        }else if($_GET['menu']==5){
            include "kelola.php";
        }else if($_GET['menu']==6){
            include "form.php";
        }else if($_GET['menu']==7){
            include "edit_form.php";
        }else if($_GET['menu']==6){
            include "form.php";
        }
        else{
            echo "Pilih Menu";
        }
    }else{
        include "home.php";
    }

    ?>
</div>

<?php
include "footer.php";

?>