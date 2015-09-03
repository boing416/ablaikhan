<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "site_specialities".
 *
 * @property integer $specialty_id
 * @property string $specialty_name
 *
 * @property SiteExchangeProgram[] $siteExchangePrograms
 */
class Specialities extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'site_specialities';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['specialty_name'], 'required'],
            [['specialty_name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'specialty_id' => 'Specialty ID',
            'specialty_name' => 'Specialty Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSiteExchangePrograms()
    {
        return $this->hasMany(SiteExchangeProgram::className(), ['specialty_id' => 'specialty_id']);
    }
}
