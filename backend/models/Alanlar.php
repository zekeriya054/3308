<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "alanlar".
 *
 * @property int $sira_no
 * @property string $alan_adi
 */
class Alanlar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'alanlar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['alan_adi'], 'required'],
            [['alan_adi'], 'string', 'max' => 50],

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'sira_no' => 'Sira No',
            'alan_adi' => 'Alan Adi',
        ];
    }
}
