<?php
namespace App\Http\Controllers;
class PostController extends Controller
{
  public function index()
{
 $redColorCss = 'color: red;'; // или 'color: #ff0000;'
 return view('home', ['redColorCss' => $redColorCss]);
}
}
?>