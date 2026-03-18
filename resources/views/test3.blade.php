<?php
@forelse($arr as $elem)
<p>{{$elem}}</p>
@empty
<p>в массиве нет элементов</p>
@endforelse
?>
<?php
@foreach($arr as $elem)
{{$elem}}
@endforeach
?>