<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FTPController extends Controller
{
    public function index ()
    {
        $test = Storage::disk('sftp')->directories('downloads');
        dd ($test);
    }
}
