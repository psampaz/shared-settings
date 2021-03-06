<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Data extends Eloquent {

    public static $rules = array(
        'code' => 'required',
        'title' => 'required'
    );

    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'data';

    protected $fillable = array('title', 'description', 'content', 'modified_by', 'created_by');

    public function applications()
    {
        return $this->belongsToMany('ApiUser');
    }

    public function createdBy()
    {
        return $this->hasOne('User', 'id', 'created_by');
    }

    public function modifiedBy()
    {
        return $this->hasOne('User', 'id', 'modified_by');
    }
}
