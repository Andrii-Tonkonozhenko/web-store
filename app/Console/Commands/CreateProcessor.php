<?php

namespace App\Console\Commands;

use App\Processor;
use Illuminate\Console\Command;

class CreateProcessor extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:processor';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add processor';

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
     * @return int
     */
    public function handle() : void
    {
        $processor = new Processor();

        $processor->title = $this->ask('title');
        $processor->core = $this->ask('core');
        $processor->ghz = $this->ask('ghz');

        $processor->save();
    }
}
