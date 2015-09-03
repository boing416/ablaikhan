<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "site_exchange_program".
 *
 * @property integer $exchange_program_id
 * @property integer $university_id
 * @property string $university_name
 * @property string $language_name
 * @property string $country
 * @property integer $specialty_id
 * @property string $specialty_name
 * @property string $period
 * @property integer $language_id
 * @property string $conditions
 * @property string $date
 * @property string $images
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
            [[ 'university_name', 'language_name', 'country',  'specialty_name', 'period',  'conditions', 'date'], 'required'],
            [['university_id', 'specialty_id', 'language_id'], 'integer'],
            [['conditions'], 'string'],
            [['date'], 'safe'],
            [['university_name', 'language_name', 'specialty_name', 'images'], 'string', 'max' => 255],
            [['country', 'period'], 'string', 'max' => 100]
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
            'university_name' => 'Вуз',
            'language_name' => 'Язык',
            'country' => 'Страна',
            'specialty_id' => 'Specialty ID',
            'specialty_name' => 'Специальность',
            'period' => 'Период',
            'language_id' => 'Language ID',
            'conditions' => 'Условия',
            'date' => 'Сроки',
            'images' => 'Images',
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
