<?php
namespace App\Http\Controllers;
class PostController extends Controller
{
  public function show()    
  {
  return view('test', ['var1'=>'1', 'var2'=>'2']);
  }

  public function show1()
 {
  return view('post.show');
 }
}
?>
