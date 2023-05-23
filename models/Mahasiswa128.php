<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa_128".
 *
 * @property int $id
 * @property string $nim
 * @property string $nama
 * @property string $kelas
 * @property string $jurusan
 */
class Mahasiswa128 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa_128';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim', 'nama', 'kelas', 'jurusan'], 'required'],
            [['nim'], 'string', 'max' => 25],
            [['nama', 'jurusan'], 'string', 'max' => 255],
            [['kelas'], 'string', 'max' => 2],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nim' => 'Nim',
            'nama' => 'Nama',
            'kelas' => 'Kelas',
            'jurusan' => 'Jurusan',
        ];
    }
    public function getProfil128()
    {
        //same as above
        return $this->hasOne(Profil128::class, ['id'=> 'id']);
    }
}
