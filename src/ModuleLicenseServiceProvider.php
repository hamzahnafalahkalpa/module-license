<?php

namespace Hanafalah\ModuleLicense;

use Hanafalah\LaravelSupport\Providers\BaseServiceProvider;

class ModuleLicenseServiceProvider extends BaseServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register(){
        $this->registerMainClass(ModuleLicense::class)
            ->registerCommandService(Providers\CommandServiceProvider::class)
            ->registers(['*']);
    }

    protected function dir(): string{
        return __DIR__ . '/';
    }

    protected function migrationPath(string $path = ''): string
    {
        return database_path($path);
    }
}
