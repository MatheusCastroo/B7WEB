<?php 
spl_autoload_register(function($class){ //O comando de autoload serve para puxar todas as classes de um determinado arquivo.
    if(file_exists('classes/'.$class.'.php')) { 
        require 'classes/'.$class.'.php'; 
    }
});