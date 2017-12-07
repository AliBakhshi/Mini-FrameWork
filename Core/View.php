<?php
namespace Core;


use Philo\Blade\Blade;

class View {

    public static function render($template,$args){
        $views = realpath('..\App\Views');
        $cache = realpath('..\storage\views');
        $blade = new Blade($views,$cache);
        return $blade->view()->make($template,$args)->render();
    }

}