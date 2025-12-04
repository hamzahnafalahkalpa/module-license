<?php

namespace Hanafalah\ModuleLicense\Data;

use Hanafalah\LaravelSupport\Supports\Data;
use Hanafalah\ModuleLicense\Contracts\Data\LicenseData;
use Hanafalah\ModuleLicense\Contracts\Data\ModelHasLicenseData as DataModelHasLicenseData;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;

class ModelHasLicenseData extends Data implements DataModelHasLicenseData
{
    #[MapInputName('id')]
    #[MapName('id')]
    public mixed $id = null;

    #[MapInputName('model_type')]
    #[MapName('model_type')]
    public ?string $model_type = null;

    #[MapInputName('model_id')]
    #[MapName('model_id')]
    public mixed $model_id = null;

    #[MapInputName('model_model')]
    #[MapName('model_model')]
    public ?object $model_model = null;

    #[MapInputName('license_model')]
    #[MapName('license_model')]
    public ?object $license_model = null;

    #[MapInputName('license')]
    #[MapName('license')]
    public ?LicenseData $license = null;

    #[MapInputName('license_id')]
    #[MapName('license_id')]
    public mixed $license_id = null;

    #[MapInputName('props')]
    #[MapName('props')]
    public ?array $props = null;
}