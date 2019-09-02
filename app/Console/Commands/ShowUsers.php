<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;

class ShowUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'users:all';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'It will show all the users.';

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
        $headers = ['ID', 'Name', 'Email'];
        $users = User::all(['id', 'name', 'email'])->toArray();
        $this->table($headers, $users);
    }
}
