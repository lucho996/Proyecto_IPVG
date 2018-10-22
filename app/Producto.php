<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $ID_PRODUCTO
 * @property string $DESCRIPCION
 * @property int $COD_PETICION_OFERTA
 * @property string $TIPO_PRODUCTO
 * @property string $PLANO_PRODUCTO
 * @property string $FECHA_LLEGADA
 * @property string $FECHA_RESPUESTA_COTIZACION
 * @property string $FECHA_DE_ENTREGA_PRODUCTO
 * @property string $ESTADO
 * @property int $UTILIDADES
 * @property int $GASTOS_GENERALES
 * @property int $TOTAL
 * @property EquipoYOHerramientaArrendado[] $equipoYOHerramientaArrendados
 */
class Producto extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'producto';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'ID_PRODUCTO';

    /**
     * @var array
     */
    protected $fillable = ['DESCRIPCION', 'COD_PETICION_OFERTA', 'TIPO_PRODUCTO', 'PLANO_PRODUCTO', 'FECHA_LLEGADA', 'FECHA_RESPUESTA_COTIZACION', 'FECHA_DE_ENTREGA_PRODUCTO', 'ESTADO', 'UTILIDADES', 'GASTOS_GENERALES', 'TOTAL'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function equipoYOHerramientaArrendados()
    {
        return $this->hasMany('App\EquipoYOHerramientaArrendado', 'ID_PRODUCTO', 'ID_PRODUCTO');
    }
}
