<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class WatchAngularBuild extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'watch:angular';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Watch and Build Angular files';

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
        return system('cd public && ng build --prod --aot -d /dist/ --watch');
    }
}
