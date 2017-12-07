<?php
/**
 * Created by PhpStorm.
 * User: Ali
 * Date: 8/24/2017
 * Time: 6:00 AM
 */

namespace App\Middlewares;


class Authentication
{

    public function handle(){


        if(isset($_SESSION['loginStatus'])){
            return true;
        }

        return false;

    }


    /**
     * job that will be done after handle returns false
     */


    public function next(){

        redirect('/login');

    }



}