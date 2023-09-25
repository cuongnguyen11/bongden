<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Http\Controllers\crawlController;

use Cache;

class UserCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'crawl';

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
        $crawl = new crawlController();
        return $crawl->echo1();
    }
}
