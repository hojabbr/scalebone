<?php

namespace App\Console\Commands\Seeds;

use Illuminate\Database\Console\Seeds\SeedCommand as BaseSeedCommand;
use Illuminate\Database\Seeder;
use Support\Database\Console\Seeds\DatabaseSeeder;
use Symfony\Component\Console\Input\InputOption;

class SeedCommand extends BaseSeedCommand
{
    /**
     * Get a seeder instance from the container.
     *
     * @return \Illuminate\Database\Seeder
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    protected function getSeeder(): Seeder
    {
        $class = $this->input->getArgument('class') ?? $this->input->getOption('class');

        if (! str_contains($class, '\\')) {
            $class = 'Support\\Database\\' . $class;
        }

        if ($class === 'Support\\Database\\Console\\Seeds\\DatabaseSeeder' &&
            ! class_exists($class)) {
            $class = 'DatabaseSeeder';
        }

        return $this->laravel->make($class)
            ->setContainer($this->laravel)
            ->setCommand($this);
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions(): array
    {
        return [
            [
                'class',
                null,
                InputOption::VALUE_OPTIONAL,
                'The class name of the root seeder',
                DatabaseSeeder::class
            ],
            ['database', null, InputOption::VALUE_OPTIONAL, 'The database connection to seed'],
            ['force', null, InputOption::VALUE_NONE, 'Force the operation to run when in production'],
        ];
    }
}
