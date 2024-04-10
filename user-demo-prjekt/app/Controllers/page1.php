<?php

    namespace App\Controllers;
    // use App\Controllers\page1;
    use CodeIgniter\Controller;
    
    class page1 extends BaseController
    {
        public function index(): string
        {
            return view("page1");
        }
    }