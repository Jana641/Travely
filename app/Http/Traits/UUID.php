<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait UUID
{
    /**
     * Boot function from Laravel.
     */
    protected static function bootUUID()
    {
        static::creating(function ($model) {
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = (string) Str::uuid();
            }
        });
    }

    /**
     * Tell Laravel to not increment the ID.
     */
    public function getIncrementing()
    {
        return false;
    }

    /**
     * Tell Laravel the ID is a string, not an integer.
     */
    public function getKeyType()
    {
        return 'string';
    }
}
