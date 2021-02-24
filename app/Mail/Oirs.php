<?php

namespace App\Mail;

use App\Models\AttentionNeighbor;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Oirs extends Mailable
{
    use Queueable, SerializesModels;

    public $attentionNeighbor;

    public function __construct(AttentionNeighbor $attentionNeighbor)
    {
        $this->attentionNeighbor = $attentionNeighbor;
    }

    public function build()
    {
        return $this->view('emails.oirs')->subject('Atención al Vecino');
    }
}
