<?php include 'catalog.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Каталог</title>
    <link rel="stylesheet" href="<?=PATH?>css/style.css">
</head>
<body>
<a href="<?=PATH?>">Главная</a>
<div class="wrapper">
    <div class="sidebar">
        <ul class="category">
            <?php echo $categories_menu ?>
        </ul>
    </div>
    <div class="content">
        <p><?=$breadcrumbs;?></p>
        <br>
        <hr>
        <?php
        if($get_one_product){
            debug($get_one_product);
        }else{
            echo "Данного товара не существует";
        }
        ?>
    </div>
</div>
<script src="<?=PATH?>js/jquery-1.9.0.min.js"></script>
<script src="<?=PATH?>js/jquery.accordion.js"></script>
<script src="<?=PATH?>js/jquery.cookie.js"></script>
<script>
    $(document).ready(function(){
        $(".category").dcAccordion();
    });
</script>
</body>
</html>