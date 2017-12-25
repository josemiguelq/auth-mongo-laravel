<?php
/**
 * Created by PhpStorm.
 * User: josemiguelq
 * Date: 25/12/17
 * Time: 09:07
 */

namespace App;


use Moloquent\Eloquent\Model as Eloquent;
use Moloquent\Eloquent\SoftDeletes;

abstract class ModelAbstract extends Eloquent
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    /**
     * Error message bag
     *
     * @var MessageBag
     */
    protected $errors;

    /**
     * It allows you to save only if the model is valid
     */
    protected static function boot()
    {
        parent::boot();
        static::saving(function ($model) {
            if (!$model->validate()) {
                throw new ModelInvalidException($model->getErrors());
            }
        });
    }

    /**
     * Validates current attributes against rulesstCase
     */
    public function validate()
    {
        $validator = app('validator');

        $v = $validator->make($this->attributesToArray(), $this->rules(), $this->messages());

        $this->extendValidator($v);

        if ($v->passes()) {
            return true;
        }
        $this->setErrors($v->messages());

        return false;
    }

    /** Returns the model's validation rules */
    public function rules()
    {
        return [];
    }

    /** Returns the custom messages for validation errors */
    public function messages()
    {
        return [];
    }

    /**
     * @param $v
     */
    public function extendValidator($v)
    {
        return;
    }

    /**
     * Retrieve error message bag
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * Set error message bag
     *
     * @var MessageBag
     */
    protected function setErrors($errors)
    {
        $this->errors = $errors;
    }

    /**
     * Inverse of wasSaved
     */
    public function hasErrors()
    {
        return !empty($this->errors);
    }
}