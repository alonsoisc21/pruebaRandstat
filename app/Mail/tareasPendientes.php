<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class tareasPendientes extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = 'Tareas Pendientes';
    public $tareasPendientes;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($tareasPendientes)
    {
        $this->tareasPendientes = $tareasPendientes;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('tareasPendientes');
    }
}
