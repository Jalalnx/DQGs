<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

use Illuminate\Support\Facades\Mail;

class SendEmails implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    private $email = null;

    public function __construct($email)
    {
        $this->email = $email;
    }

    public function handle()
    {
        $emailcontent = array (
            'subject' => 'الدعم الفني',
            'emailmessage' => 'شكرا لك لتجربة خدمات الموقع وتجربة الاسئله والجلوس الاختبارات سوف نعمل علي تحسين الموقع'
            );
            Mail::send('email.email_template', $emailcontent, function($message)
            {
                // \Auth::user()->email
            $message->to($this->email,\Auth::user()->parent_name)
            ->subject('DQGs Team');
            });
    }


}


  