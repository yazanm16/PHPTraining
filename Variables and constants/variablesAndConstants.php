<?php
/*
I read about restrictions for naming variables, such as:
    -Variables must start with a $ sign.
    -You can use an underscore (_) at the beginning of the variable name.($_name)✅
    -You can use letters (lowercase and uppercase) to start a variable.(($name),($Name))✅
    -You can't use number at the beginning of the variable name.($1name)❌

*/

/*
-To write a constant in PHP you can use :
    define():
    const:
-Constant values ​​cannot be changed after they are defined.
*/
define("PI",3.14);
//PI=3.15; Invalid
echo PI;
echo "<br>";
const name="Hi";
//name="g";Invalid
echo name;
