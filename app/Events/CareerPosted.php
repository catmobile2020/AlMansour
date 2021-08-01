<?php

namespace App\Events;

use App\Models\Career;
use App\Models\News;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class CareerPosted
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $career;

    /**
     * Create a new event instance.
     *
     * @param News $post
     */
    public function __construct(Career $career)
    {
        $this->career = $career;
    }
}
