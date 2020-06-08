<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\HTML;

use App\Book;

class BookController extends Controller
{
    public function index()
    {
        return view('book.index');
    }
}
