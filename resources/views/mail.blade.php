<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" cntent="width-device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title> Code Review Notification </title>
    </head>

    <body>
        <div>
            <h1> {{$user_reciever->name}} </h1>
            <p> {{$user_sender->username}} has interacted with your post: {{$post->title}}. </p>
            <p> "{{$content}}" </p>
        </div>
    </body>
</html>
