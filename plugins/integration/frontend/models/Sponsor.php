<?php namespace INTEGRATION\Frontend\Models;

use Model;

/**
 * Sponsor Model
 */
class Sponsor extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'integration_frontend_sponsors';

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
