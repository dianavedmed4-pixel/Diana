<!DOCTYPE html>
<html>
<head>
    <title>my view</title>
</head>
<body>
    variable one:{{$var1}}
    variable two:{{$var2}}
</body>
</html>
<?php
	class PostController extends Controller
	{
		public function show()
		{
			return view('post.show');
		}
	}
?>
