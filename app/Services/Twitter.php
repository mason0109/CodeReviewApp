<?php

namespace App\Services;

//This is the service. 
// The container is our application (web.php is where we bind it - singleton)
class Twitter
{
    //this is a constant for connecting to this class.
    private $apiKey;

    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function tweet($text)
    {
        $newString = $text.$this->apiKey;
        dd($newString);
    }

    public function retweet($postid)
    {
        $newString = "User has communicated with Twitter service to retweet the post: ".$postid;
        dd($newString);
    }

    public function like($postid)  
    { 
        $newString = "User has communicated with Twitter service to like the post: ".$postid;
        dd($newString);
    }

    public function comment($postid)
    {
        $newString = "user has communicated with Twitter service to comment on a post".$postid;
        dd($newString);
    }

     
}