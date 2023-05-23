<?php

namespace app\Models;

use Yii\Database\Model;

/**
 * This is the model class for table "krs".
 *
 * @property string|null $km
 * @property string|null $matakuliah
 * @property string|null $sks
 */
class Krs extends Modes
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'krs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['km'], 'string', 'max' => 6],
            [['matakuliah'], 'string', 'max' => 15],
            [['sks'], 'string', 'max' => 5],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'km' => 'Km',
            'matakuliah' => 'Matakuliah',
            'sks' => 'Sks',
        ];
    }
}
