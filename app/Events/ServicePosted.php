<?php

namespace App\Events;

use App\Models\Career;
use App\Models\Category;
use App\Models\News;
use App\Models\Service;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ServicePosted
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $service;

    /**
     * CategoryPosted constructor.
     * @param Category $category
     */
    public function __construct(Service $service)
    {
        $this->service = $service;
    }
}
