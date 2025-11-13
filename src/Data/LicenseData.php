<?php

namespace Hanafalah\ModuleLicense\Data;

use Hanafalah\LaravelSupport\Supports\Data;
use Hanafalah\ModuleLicense\Contracts\Data\LicenseData as DataLicenseData;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;

class LicenseData extends Data implements DataLicenseData
{
    #[MapInputName('id')]
    #[MapName('id')]
    public mixed $id = null;

    #[MapInputName('name')]
    #[MapName('name')]
    public string $name;

    #[MapInputName('props')]
    #[MapName('props')]
    public ?array $props = null;
}