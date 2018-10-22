<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $RUT_CLIENTE
 * @property string $NOMBRE_COMPLETO
 * @property string $DIRECCION
 * @property string $CIUDAD
 * @property string $COMUNA
 * @property string $GIRO
 * @property int $TELEFONO
 * @property string $TIPO
 */
class Clientes extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'RUT_CLIENTE';

    /**
     * @var array
     */
    protected $fillable = ['NOMBRE_COMPLETO', 'DIRECCION', 'CIUDAD', 'COMUNA', 'GIRO', 'TELEFONO', 'TIPO'];

}
