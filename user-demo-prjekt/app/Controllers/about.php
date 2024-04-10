<?php

    namespace App\Controllers;
    // use App\Controllers\page1;
    use CodeIgniter\Controller;
    
    class about extends BaseController
    {
        public function index(): string
        {
            return view("about");
        }
    }