<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PostController extends Controller
{
  public function index(){
    return $posts = DB::table('posts')->get();
  }
}
