<?php namespace Integration\Frontend\Models;

use Model;

/**
 * Shift Model
 */
class Shift extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'integration_frontend_shifts';

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
    public $hasOne = ['visitor' => '\Integration\Frontend\Models\Visitor'];
    public $hasMany = [];
    public $belongsTo = ['schedule' => '\Integration\Frontend\Models\Schedule'];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
