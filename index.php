<?php
    function __autoload($class){
        require_once $class .'.php';
    }

    $a1 = new Alunno("aa", "aaaa", 12);
    $a2 = new Alunno("bb", "bbbb", 24);
    $a3 = new Alunno("cc", "cccc", 36);

    $classe = array($a1, $a2, $a3);

    foreach($classe as $alunno){
        echo $alunno-> __tostring();
    }



?>