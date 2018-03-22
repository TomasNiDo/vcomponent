<?php

namespace Verzatiletom\Vcomponent\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class CreateVueComponent extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:v-component
        {name : The name of the component file}
        {--dir=js : The directory where the component should be generated}';

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
        $name = kebab_case($this->argument('name'));
        $filename = $this->argument('name') . '.vue';
        $directory = $this->option('dir');
        $destination = $directory . '/' . $filename;

        if (! Storage::disk('v-component')->exists($directory)) {
            Storage::disk('v-component')->makeDirectory($directory);
        }

        if (Storage::disk('v-component')->exists($destination)) {
            return $this->error('File already exists!');
        }

        $transfer = Storage::disk('v-component')->put(
            $destination,
            view('v-component::vue-component', compact('name'))
        );

        if (! $transfer) {
            return $this->error('Error generating vue component.');
        }

        return $this->info('File successfully generated!');
    }
}
