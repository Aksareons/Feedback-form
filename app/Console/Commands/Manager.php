<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class Manager extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'superuser:set {user}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        
        $user = User::where('name', $this->argument('user'))->first();
        $user->is_manager = 1;
        $user->save();

        echo($user->is_manager);
        return 0;
    }
}
