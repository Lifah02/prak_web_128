<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "obat_128".
 *
 * @property int $id
 * @property string $kode_obat
 * @property float $harga
 * @property int $stok_obat
 */
class Obat128 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'obat_128';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_obat', 'harga', 'stok_obat'], 'required'],
            [['harga'], 'number'],
            [['stok_obat'], 'integer'],
            [['kode_obat'], 'string', 'max' => 25],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kode_obat' => 'Kode Obat',
            'harga' => 'Harga',
            'stok_obat' => 'Stok Obat',
        ];
    }
    public function getObat128()
    {
        return $this->hasMany(Obat128::className(), ['id']);
    }
}
