<?php namespace Integration\Frontend\Models;

use Model;

/**
 * Event Model
 */
class Event extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'integration_frontend_events';

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
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
