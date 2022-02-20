<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

	protected $fillable = [
		'image',
		'name',
		'price',
		'type'
	];

	public function questions()
	{
		return $this->hasMany(related: Question::class);
	}
}
