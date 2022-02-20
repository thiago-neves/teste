<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

	protected $fillable = [
		'title',
		'question',
		'answer',
		'product_id'
	];

	public function product()
	{
		return $this->belongsTo(related: Product::class);
	}
}
