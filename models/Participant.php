<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "participant".
 *
 * @property int $id
 * @property string $email
 * @property string $name
 * @property string $gender
 * @property string $address
 * @property string $origin
 * @property string $Whatsapp
 * @property int $attendance
 */
class Participant extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'participant';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['address'], 'string'],
            [['attendance'], 'integer'],
            [['email', 'name', 'gender', 'origin', 'Whatsapp'], 'string', 'max' => 255],
            [['email'], 'unique'],
            [['email', 'name', 'origin', 'Whatsapp'],'required']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'email' => 'Email',
            'name' => 'Nama',
            'gender' => 'Jenis Kelamin',
            'address' => 'Alamat',
            'origin' => 'Asal',
            'Whatsapp' => 'No Whatsapp',
            'attendance' => 'Kehadiran',
        ];
    }

    public static function selectParticipantByEmail($email){
        return Participant::find()
        ->where(['email' => $email])
        ->all();
    }
}
