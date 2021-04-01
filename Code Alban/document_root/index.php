<?php
    include "C:\www\document_root\smarty-3.1.39\libs\Smarty.class.php";
    
    // Note : Smarty a un 'S' majuscule
    require_once("C:\www\document_root\smarty-3.1.39\libs\Smarty.class.php");
    $smarty = new Smarty();
    $smarty->template_dir='views';
    $smarty->compile_dir='tmp';
    
    $array =array(
        'Rivendell'=>1,
        'Mirkwood'=>2,
        'Fangorn'=>3,
        'Lorien'=>4,
    );
    
    $smarty->assign('table',$array);
    
    echo "<title>alo</title>";
    $smarty->display('C:\www\document_root\tpl\index.tpl');
?>