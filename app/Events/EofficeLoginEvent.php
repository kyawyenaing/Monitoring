<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class EofficeLoginEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    
    public $message;
    public function __construct(Message $message)
    {
        $this->message= $message;
    }

    public function broadcastOn()
    {
        return ('eoffice-login');
    }
}
