<?php 
return [


    ['GET', '/', ['Example\Controllers\MainController', 'first']],

    ['POST', '/Form1', ['Example\Controllers\MainController', 'post_form_1']],

    ['POST', '/Form2', ['Example\Controllers\MainController', 'post_form_2']],

    ['GET', '/Social_networks', ['Example\Controllers\MainController', 'Social_networks']],

    ['GET', '/All', ['Example\Controllers\MainController', 'All']],


];
?>