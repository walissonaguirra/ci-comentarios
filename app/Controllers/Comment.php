<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Comment extends BaseController
{
    public function index()
    {
        return view('comment/index');
    }
}
