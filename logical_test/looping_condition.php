<?php 
    for ($i=1; $i <= 50 ; $i++) { 
        if ($i%3==0 && $i%5!=0) {
            echo "foo";
        }
        if ($i%5==0 && $i%3!=0) {
            echo "bar";
        }
        if ($i%3==0 && $i%5==0) {
            echo "fooBar";
        }

        echo $i."<br />";
    }
?>