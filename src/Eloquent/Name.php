<?php namespace Arberd\Geonames\Eloquent;

use Illuminate\Database\Eloquent\Model;

class Name extends Model {

	/**
	 * The table associated with the model.
	 *
	 * @var string
	 */
	protected $table = 'geonames_names';

	/**
	 * The relations to eager load on every query.
	 *
	 * @var array
	 */
	protected $with = array('country');

	/* -(  Relationships  )-------------------------------------------------- */

	public function country()
	{
		return $this->belongsTo('Arberd\Geonames\Eloquent\Country');
	}

}