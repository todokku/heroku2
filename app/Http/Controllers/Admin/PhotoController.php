<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\HTML;

use App\Photo;

class PhotoController extends Controller
{
     public function index(Request $request)
{