
<!--<ul>-->
<!--     --><?php
//
//     foreach ($_SERVER as $value) {
//?>
<!---->
<!---->
<!--     <li>--><?php //echo $value?><!--</li>-->
<!---->
<!---->
<!---->
<?php
//}
//?>
<!--</ul>-->
<?php
print_r($_ENV);
print_($_SERVER);
foreach ($_SERVER as $key) {
    echo $key . '-' . $value;
}