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
        <!----------------------------Хлебные крошки------------------------------------------>
        <p><?=$breadcrumbs;?></p>
        <!----------------------------Хлебные крошки------------------------------------------>

        <br>
        <hr>

        <!----------------------------Выбор количества товаров на страницу------------------------------------------>
        <div>
            <select name="perpage" id="perpage">
                <?php foreach($option_perpage as $option): ?>
                <option <?php if($perpage == $option) echo "selected";?> value="<?=$option?>"><?=$option?> Товаров на страницу</option>
                <?php endforeach; ?>
            </select>
        </div>

        <!----------------------------Выбор количества товаров на страницу------------------------------------------>

        <?php if($products): ?>
            <!----------------------------Пагинация-Top------------------------------------------>
            <?php if( $count_pages > 1 ): ?>
                <div class="pagination"><?=$pagination?></div>
            <?php endif; ?>
            <!----------------------------Пагинация-Top------------------------------------------>

<!----------------------------Вывод товара------------------------------------------->
            <?php foreach($products as $product): ?>
                <a href="<?=PATH?>product.php?product=<?=$product['id']?>"><?=$product['title']?></a><br>
            <?php endforeach; ?>
 <!----------------------------Вывод товара------------------------------------------->

            <!----------------------------Пагинация-Bottom------------------------------------------>
            <?php if( $count_pages > 1 ): ?>
                <div class="pagination"><?=$pagination?></div>
            <?php endif; ?>
            <!----------------------------Пагинация-Bottom------------------------------------------>

        <?php else: ?>
            <p>Здесь товаров нет!</p>
        <?php endif; ?>
    </div>
</div>
<script src="<?=PATH?>js/jquery-1.9.0.min.js"></script>
<script src="<?=PATH?>js/jquery.accordion.js"></script>
<script src="<?=PATH?>js/jquery.cookie.js"></script>
<script>
    $(document).ready(function(){
        $(".category").dcAccordion();
        $("#perpage").change(function(){
            var perPage = this.value; // $(this).val()
            $.cookie('per_page', perPage, {expires:7});
            window.location = location.href;
        });
    });
</script>
</body>
</html>