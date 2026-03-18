<?php 
$user = [
    [
        'name' =>'user1',
        'age'=>21,
    ],
    [
        'name'=>'user2',
        'age'=>22,
    ],
    [
        'name'=>'user3',
        'age'=>23,
    ],
];
?>
<ul>
    @foreach($users as $user)
    <li>{{$user['name']}}{{$user['age']}}</li>
    @endforeach
</ul>