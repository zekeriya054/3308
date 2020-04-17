<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "siniflar".
 *
 * @property int $sira_no
 * @property string $sinif_ad
 */
class Siniflar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'siniflar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sinif_ad'], 'required'],
            [['sinif_ad'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'sira_no' => 'Sira No',
            'sinif_ad' => 'Sinif Ad',
        ];
    }
}
