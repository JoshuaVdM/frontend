<?php namespace Integration\Frontend\Models;

use Model;

/**
 * Visitor Model
 */
class Visitor extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'integration_frontend_visitors';

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
    public $hasMany = [
        'teams' => '\Integration\Frontend\Models\Team',
        'shifts' => '\Integration\Frontend\Models\Shift'
    ];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
