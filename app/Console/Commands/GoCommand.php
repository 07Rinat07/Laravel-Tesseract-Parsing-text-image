<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use thiagoalessio\TesseractOCR\TesseractOCR;

class GoCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'go';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $image = public_path('/text.png');
        $tesseract = new TesseractOCR($image);

        $content = $tesseract->run();
        dd($content);
    }
}
