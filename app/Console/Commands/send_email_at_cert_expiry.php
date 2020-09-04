<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\certification;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailNotify;
use App\Mail\CertificationExpiryEmail;



class send_email_at_cert_expiry extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'everyDay:checkExpiry';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This checks the certification expiry date every 24 hours';

    /**
     * Create a new command instance.
     *everyDay:checkExpiry
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $certification = certification::where('expires_at','<',Carbon::now()->subDays(1))->get(); 
        Mail::send(new CertificationExpiryEmail($certification));
        
    }
}
