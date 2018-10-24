<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $RUTP
 * @property string $NOMBREP
 * @property string $APELLIDOP
 * @property int $TELEFONOP
 * @property string $CORREOP
 * @property int $HORAHOMBRE
 * @property string $FECHANACIMIENTO
 * @property string $DIRECCION
 * @property string $TIPO
 * @property Usuario $usuario
 */
class Personal extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'personal';
    //public $timestamps = false;
    public $timestamps = false;
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'RUTP';

    /**
     * @var array
     */
    protected $fillable = ['RUTP','NOMBREP', 'APELLIDOP', 'TELEFONOP', 'CORREOP', 'HORAHOMBRE', 'FECHANACIMIENTO', 'DIRECCION', 'TIPO'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function usuario()
    {
        return $this->hasOne('App\Usuario', 'RUTP', 'RUTP');
    }
}
