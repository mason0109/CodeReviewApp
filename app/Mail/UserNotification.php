<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\User;
use App\Models\Post;

class UserNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $user_reciever;
    public $user_sender;
    public $post;
    public $content;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user, Post $post, string $content)
    {
        $this->user_sender = $user;
        $this->post = $post;
        $this->content = $content;
        $this->user_reciever = $post->user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('notifications@codereview.com')->view('mail');
    }
}
