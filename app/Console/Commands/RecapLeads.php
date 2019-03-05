<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Mail\SendRecap;
use Illuminate\Support\Facades\Mail;

class RecapLeads extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pippo:pluto';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Il nostro primo comando artisan';

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
        Mail::to('michele@boolean.careers')->send(new SendRecap());
    }
}
