<?php

namespace Jetimob\ZApi\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Jetimob\ZApi\ZApiServiceProvider;

class ZApiInstallPackage extends Command
{
    protected $signature = 'z-api:install';

    protected $description = 'Publica o arquivo de configuração para o diretório "config" local';

    public function handle(): void
    {
        if (File::exists(config_path('z-api.php'))) {
            if ($this->confirm('O arquivo de configuração já existe, deseja sobrescrever?', false)) {
                $this->publish(true);
                $this->info('Arquivo de configuração sobrescrito');
            }

            return;
        }

        $this->publish();
        $this->info('Arquivo de configuração copiado para ./config/z-api.php');
    }

    private function publish($force = false): void
    {
        $params = [
            '--provider' => ZApiServiceProvider::class,
            '--tag'      => 'config'
        ];

        if ($force) {
            $params['--force'] = '';
        }

        $this->call('vendor:publish', $params);
    }
}