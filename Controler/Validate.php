<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Validate
{
    function checkValidity($password)
    {
        $validArray=["password", "Password1", "Password123"];
        if (in_array($password, $validArray, true ))
        {
            return true;
        }else{
            return false;
        }
    }
}