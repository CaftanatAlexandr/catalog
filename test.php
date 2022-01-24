<?php
require 'config.php';

function debug($arr){
    echo "<pre>" . print_r($arr, true) . "</pre>";
    
 }

$connect = @mysqli_connect(DBHOST, DBUSER, DBPASS, DB) or die("Соидинение с базой данных не установленно");
mysqli_set_charset($connect, 'utf8') or die("Кодировка не установлена");


$query = 'SELECT * FROM categories';
$res = mysqli_query($connect, $query);

//$row = mysqli_fetch_assoc($res);
$arr_cat = array();
while($row = mysqli_fetch_assoc($res)){
    
    $arr_cat[$row['id']] = $row;
    //debug($row);
}

//debug($arr_cat);


$data = [
            685 =>['id'=>685, 'title' => 'apple', 'parent' => 0],
            691=>['id' => 691, 'title' => 'ipad', 'parent' => 685]
        ];

        

        function map_tree($dataset) {
            $tree = array();
        
            foreach ($dataset as $id=>&$node) {    
                if (!$node['parent']){
                    $tree[$id] = &$node;
                }else{ 
                    $dataset[$node['parent']]['childs'][$id] = &$node;
              
                }
            }
        
            return $tree;
        }


        $res_arr = map_tree($data);
        //debug($data);

       debug($res_arr);



    ?>

    <ul>
        <li>Список ul li</li>
    </ul>

    <li>Список 2 li </li>

    <ul>Список 3 ul</ul>