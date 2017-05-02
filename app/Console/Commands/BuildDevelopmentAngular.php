<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class BuildDevelopmentAngular extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dev:angular';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "Build and watch a development version of Angular 4";

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
        return system('cd public && ng build -d /dist/ --watch');
    }
}
