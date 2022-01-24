<?php
$var = 'Hello world';
$char = strlen($var);
for($i = 0; $i < $char; $i++){
    
    $arr_char[] = $var[$i];
}
$arr_char = array_reverse($arr_char);
$str = implode($arr_char);
echo $str;

$rows = 20;
$cols = 20;
$table = '<table border="1">';

for($tr = 1; $tr <= $rows; $tr++){
    $table .= '<tr>';
    for($td = 1; $td <= $cols; $td++){
        $table .= '<td>'. $tr * $td .'</td>';
    }
    $table .= '</tr>';
}
    $table .= '</table>';

    echo $table;


