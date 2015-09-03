<?php

namespace backend\modules\settings\models;

use Yii;

/**
 * This is the model class for table "site_exchange_program".
 *
 * @property integer $exchange_program_id
 * @property integer $university_id
 * @property string $country
 * @property integer $specialty_id
 * @property string $specialty_name
 * @property string $period
 * @property integer $language_id
 * @property string $conditions
 * @property string $date
 *
 * @property SiteUniversities $university
 * @property SiteLanguages $language
 */
class Exchangeprogram extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'site_exchange_program';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['university_id', 'country', 'specialty_id', 'specialty_name', 'period', 'language_id', 'conditions', 'date'], 'required'],
            [['university_id', 'specialty_id', 'language_id'], 'integer'],
            [['conditions'], 'string'],
            [['date'], 'safe'],
            [['country', 'period'], 'string', 'max' => 100],
            [['specialty_name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'exchange_program_id' => 'Exchange Program ID',
            'university_id' => 'University ID',
            'country' => 'Country',
            'specialty_id' => 'Specialty ID',
            'specialty_name' => 'Specialty Name',
            'period' => 'Period',
            'language_id' => 'Language ID',
            'conditions' => 'Conditions',
            'date' => 'Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUniversity()
    {
        return $this->hasOne(SiteUniversities::className(), ['university_id' => 'university_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLanguage()
    {
        return $this->hasOne(SiteLanguages::className(), ['language_id' => 'language_id']);
    }
}
