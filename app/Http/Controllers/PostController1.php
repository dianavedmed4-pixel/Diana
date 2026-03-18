<?php
namespace App\Http\Controllers;
class PostController extends Controller
{
  public function showProfile()
{
 $name = 'Иван Иванов';
 $age = 30;
 $salary = 50000;

 return view('test2', [
 'name' => $name,
 'age' => $age,
 'salary' => $salary
]);
}
}
?>
