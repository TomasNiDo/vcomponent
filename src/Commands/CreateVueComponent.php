<?php

namespace Verzatiletom\Vcomponent\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class CreateVueComponent extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:v-component
        {name : The name of the component file}
        {--dir=assets/js : The directory where the component should be generated}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate VueJS component';

    protected $file;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $this->file = dirname(__DIR__) . '/assets/VueComponent.vue';
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $destination = resource_path($this->option('dir') . '/' . $this->argument('name') . '.vue');

        if (file_exists($destination)) {
            return $this->error('File already exists!');
        }

        $transfer = File::copy($this->file, $destination);

        if (! $transfer) {
            return $this->error('Error generating vue component.');
        }

        return $this->info('File successfully generated!');
    }
}
