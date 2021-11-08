<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Mail extends Mailable
{
    protected $data;
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data=$data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $datatemplate="CV được gửi từ PTJOB";
        return $this->subject('CV Ứng Tuyển')->view('mail.mail-template',compact('datatemplate'))->attach($this->data['file']->getRealPath(),[
            'as'=> $this->data['file']->getClientOriginalName()
        ]);
    }
}
