<?php

namespace App\Console\Commands;

use App\Country;
use Illuminate\Console\Command;

class CreateCountry extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:country';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add country';

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
        $country = new Country();

        $country->title = $this->ask('title');
        $country->save();
    }
}
