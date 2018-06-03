<?php

namespace App\Events;
use App\Events\Event;
use Illuminate\Mail\Message;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class WebportalAdminLoginEvent extends Events implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

   public $message;
    public function __construct(Message $message)
    {
        $this->message = $message;
    }
 
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
