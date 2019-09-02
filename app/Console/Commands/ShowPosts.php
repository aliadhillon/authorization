<?php

namespace App\Console\Commands;

use App\Post;
use Illuminate\Console\Command;

class ShowPosts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'posts:all';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'It will show all the posts';

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
        $headers = ['Title', 'Body'];
        $posts = Post::all(['title', 'body'])->toArray();
        $this->table($headers, $posts);
    }
}
