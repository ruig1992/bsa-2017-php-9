<?php
namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Car
 * @package App\Entity
 */
class Car extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'cars';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'model',
        'registration_number',
        'year',
        'color',
        'mileage',
        'price',
    ];

    /**
     * Get the user that owns the car.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
