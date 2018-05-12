<?php

namespace App\Console\Commands;

use App\Mail\ThankYouMail;
use Illuminate\Console\Command;
use Mail;

class SendNewsLetter extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:send_news_letter';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        Mail::to("rinordreshaj93@gmail.com")->send(new ThankYouMail());
    }
}
