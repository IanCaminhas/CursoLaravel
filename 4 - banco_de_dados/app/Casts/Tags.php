<?php

namespace App\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Exception;

class Tags implements CastsAttributes
{

    protected $limitTags;

    public function __construct($limitTags){
        $this->limitTags = $limitTags;
    }

    /**
     * Cast the given value.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @param  string  $key
     * @param  mixed  $value
     * @param  array  $attributes
     * @return mixed
     */
    public function get($model, string $key, $value, array $attributes)
    {
        return json_decode($value);
    }

    /**
     * Prepare the given value for storage.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @param  string  $key
     * @param  mixed  $value
     * @param  array  $attributes
     * @return mixed
     */
    public function set($model, string $key, $value, array $attributes)
    {
        $numElements = count($value);

        if($numElements > $this->limitTags) {
            throw new Exception("O número de tags não pode passar de {$this->limitTags}");
        }

        return json_encode($value);
    }
}
