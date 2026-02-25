<?php
namespace App\Http\Controllers;
class PostController extends Controller
{
  public function show()    
  {
  return 'hello world';
  }
}
?>
<?php
class PostController extends Controller
{
    public function show()
{
    $post = [
        1=> 'текст 1',
        2=> 'текст 2',
        3=> 'текст 3',
        4=> 'текст 4',
        5=> 'текст 5',
    ]
}
}