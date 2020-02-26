<?php
require "../src/template/head.php";
//write Fizzbuzz to show each item as li in an ol
//So loop and then if elseif else inside
echo "<h1>FizzBuzz</h1>";

echo "<ol>";
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        //echo "<li>Fizzbuzz</li>";
        echo "<div class='element fizzbuzz'>Fizzbuzz</div>";
    } elseif ($i % 3 == 0) {
        echo "<li>Fizz</li>";
    } elseif ($i % 5 == 0) {
        echo "<li>Buzz</li>";
    } else {
        echo "<li>Number: $i</li>";
    }

}
echo "<i class='fa fa-pencil-square-o' aria-hidden='true'></i>";
echo "<i class='fa fa-times' aria-hidden='true'></i>";

require "../src/template/footer.php";