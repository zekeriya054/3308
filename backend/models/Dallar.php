<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dallar".
 *
 * @property int $sira_no
 * @property int $alan_sira_no
 * @property string $dal_adi
 *
 * @property Alanlar $alanSiraNo
 */
class Dallar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dallar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['alan_sira_no', 'dal_adi'], 'required'],
            [['alan_sira_no'], 'integer'],
            [['dal_adi'], 'string', 'max' => 50],
            [['alan_sira_no'], 'exist', 'skipOnError' => true, 'targetClass' => Alanlar::className(), 'targetAttribute' => ['alan_sira_no' => 'sira_no']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'sira_no' => 'Sira No',
            'alan_sira_no' => 'Alan Sira No',
            'dal_adi' => 'Dal Adi',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAlanSiraNo()
    {
        return $this->hasOne(Alanlar::className(), ['sira_no' => 'alan_sira_no']);
    }
}
