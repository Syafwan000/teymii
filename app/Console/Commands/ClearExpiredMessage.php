<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class ClearExpiredMessage extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'clear:message';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear expired message';

    /**
     * Execute the console command.
     */
    public function handle(User $user)
    {
        $user->where('expired_at', '<', now())->delete();
    }
}
