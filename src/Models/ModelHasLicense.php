<?php

namespace Hanafalah\ModuleLicense\Models;

use Hanafalah\LaravelHasProps\Concerns\HasProps;
use Hanafalah\LaravelSupport\Models\BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;
use Hanafalah\ModuleLicense\Resources\ModelHasLicense\{
    ViewModelHasLicense,
    ShowModelHasLicense
};
use Illuminate\Database\Eloquent\Concerns\HasUlids;

class ModelHasLicense extends BaseModel
{
    use HasUlids, HasProps, SoftDeletes;
    
    public $incrementing  = false;
    protected $keyType    = 'string';
    protected $primaryKey = 'id';
    public $list = [
        'id',
        'license_id',
        'model_type',
        'model_id',
        'props',
    ];
    
    public function viewUsingRelation(): array{
        return [
            'model','license'
        ];
    }

    public function showUsingRelation(): array{
        return [
            'model','license'
        ];
    }

    public function license(){return $this->belongsToModel('License');}
    public function model(){return $this->morphTo('model');}

    public function getViewResource(){
        return ViewModelHasLicense::class;
    }

    public function getShowResource(){
        return ShowModelHasLicense::class;
    }
}
