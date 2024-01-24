<?php
// <-- Declaration namespace -->
namespace Controllers;

// <-- Creation Class -->
class HomeController
{
    // declaration de la fonction displayHome
    public function displayHome()
    {
        // introduction de la view 
        $template = "home.phtml";
        include_once 'views/layout.phtml';
    }
}