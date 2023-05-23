<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Matakuliah128".
 *
 * @property int $id
 * @property string $kode_mk
 * @property string $nama_mk
 */
class Matakuliah128 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Matakuliah128';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_mk', 'nama_mk'], 'required'],
            [['kode_mk'], 'string', 'max' => 25],
            [['nama_mk'], 'string', 'max' => 11],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kode_mk' => 'kode_Matakuliah',
            'nama_mk' => 'Nama Matakuliah',
        ];
    }
}
