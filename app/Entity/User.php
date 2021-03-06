<?php
namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * @package App\Entity
 */
class User extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['first_name', 'last_name', 'is_active'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'is_active' => 'boolean',
    ];

    /**
     * Get the cars for the user.
     */
    public function cars()
    {
        return $this->hasMany(Car::class);
    }
}
