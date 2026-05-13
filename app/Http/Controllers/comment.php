<?php
$comment = new App\Comment(['message' => 'A new comment.']);

$post = App\Post::find(1);

$post->comments()->save($comment);
>
<?php

$account = App\Account::find(10);

$user->account()->associate($account);

$user->save();
>