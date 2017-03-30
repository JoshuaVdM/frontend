<?php namespace INTEGRATION\Frontend\Models;

use Model;

/**
 * Schedule Model
 */
class Schedule extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'integration_frontend_schedules';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = ['shifts' => '\INTEGRATION\Frontend\Models\Shift'];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
