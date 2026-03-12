<?php
return view('test', ['arr'=>[1,2]]);
{{$arr[0]}}
{{$arr[1]}}
{{$arr[0]+$arr[1]}}
{{count($arr)}}
?>