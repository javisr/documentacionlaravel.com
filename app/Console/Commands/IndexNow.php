<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class IndexNow extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'indexnow:notify';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update IndexNow.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $version = config('settings.default_version');
        $base = 'https://documentacionlaravel.com/';
        $uri = 'docs/'.$version.'/';
        $pages = [
           $base.'docs/',
            $base.'docs/'.$version.'/',
        ];

        $files =  array_diff(scandir(resource_path('docs/'.$version)), array('.', '..'));

        foreach ($files as  $value) {
            if (Str::endsWith($value, '.md')) {
                $pages[] = $base.$uri.$value;
            }
        }

        $payload = [
            "host" => "documentacionlaravel.com",
            "key" => config('indexnow.key'),
            "keyLocation" => 'https://documentacionlaravel.com/'.config('indexnow.key').'.txt',
            "urlList" => $pages
        ];

        $response = Http::asJson()->post('https://api.indexnow.org/indexnow', $payload);

        $this->info($response->status());

        return 0;
    }


}
