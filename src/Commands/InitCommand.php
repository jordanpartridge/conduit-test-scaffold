<?php

declare(strict_types=1);

namespace JordanPartridge\ConduitTestscaffold\Commands;

use Illuminate\Console\Command;

class InitCommand extends Command
{
    protected $signature = 'init';

    protected $description = 'Sample command for test-scaffold component';

    public function handle(): int
    {
        $this->info('🚀 test-scaffold component is working!');
        $this->line('This is a sample command. Implement your logic here.');
        
        return 0;
    }
}