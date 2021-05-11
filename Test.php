<?php
require('SMath.php');

class Test{
    public static function TestMath(): bool {
        assert(Math::Sum(1,1) == 2);
    }
}

if (Test::TestMath()){
    echo "Math function test passed";
} else {
    echo "Math function has problems";
}


?>