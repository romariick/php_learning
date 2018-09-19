<?php

/*Type hints */
function myFunction(&$a){
    echo 'Ok callback : '. $a;   
}
call_user_func('myFunction', 10);
