<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MigrateLiteCommand extends Command
{
    protected $signature = 'migrate:lite {operation=migrate} {--force} {--seed} {--step} {--database=sqlite} {--path=database/migrations/lite}';

    protected $description = 'Run various migration operations for the lite database';

    public function handle(): void
    {
        $operation = $this->argument('operation');
        $options = [
            '--database' => $this->option('database'),
            '--path' => $this->option('path'),
            '--force' => $this->option('force'),
            '--step' => $this->option('step'),
        ];

        $command = match ($operation) {
            'fresh' => 'migrate:fresh',
            'refresh' => 'migrate:refresh',
            'rollback' => 'migrate:rollback',
            'reset' => 'migrate:reset',
            'install' => 'migrate:install',
            'status' => 'migrate:status',
            default => 'migrate',
        };

        $this->call($command, $options);

        if ($this->option('seed')) {
            $this->call('db:seed', [
                '--class' => 'Database\\Seeders\\lite\\DatabaseSeeder',
                '--database' => $this->option('database'),
            ]);
        }

        $this->info("Migration operation '$operation' for the lite database has been executed successfully.");
    }
}
