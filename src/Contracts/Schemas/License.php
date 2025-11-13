<?php

namespace Hanafalah\ModuleLicense\Contracts\Schemas;

use Hanafalah\ModuleLicense\Contracts\Data\LicenseData;
//use Hanafalah\ModuleLicense\Contracts\Data\LicenseUpdateData;
use Hanafalah\LaravelSupport\Contracts\Supports\DataManagement;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * @see \Hanafalah\ModuleLicense\Schemas\License
 * @method mixed export(string $type)
 * @method self conditionals(mixed $conditionals)
 * @method array updateLicense(?LicenseData $license_dto = null)
 * @method Model prepareUpdateLicense(LicenseData $license_dto)
 * @method bool deleteLicense()
 * @method bool prepareDeleteLicense(? array $attributes = null)
 * @method mixed getLicense()
 * @method ?Model prepareShowLicense(?Model $model = null, ?array $attributes = null)
 * @method array showLicense(?Model $model = null)
 * @method Collection prepareViewLicenseList()
 * @method array viewLicenseList()
 * @method LengthAwarePaginator prepareViewLicensePaginate(PaginateData $paginate_dto)
 * @method array viewLicensePaginate(?PaginateData $paginate_dto = null)
 * @method array storeLicense(?LicenseData $license_dto = null)
 * @method Collection prepareStoreMultipleLicense(array $datas)
 * @method array storeMultipleLicense(array $datas)
 */

interface License extends DataManagement
{
    public function prepareStoreLicense(LicenseData $license_dto): Model;
}