<?php
/**
 * Created by PhpStorm.
 * User: Ali
 * Date: 8/24/2017
 * Time: 7:13 AM
 */

namespace App\Middlewares;


class notAdminAuthentication
{

    public function handle(){


        if(!isset($_SESSION['loginStatusAdmin'])){
            return true;
        }

        return false;

    }


    /**
     * job that will be done after handle returns false
     */


    public function next(){

        redirect('/admin/');

    }

}