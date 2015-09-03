<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "site_universities".
 *
 * @property integer $university_id
 * @property string $university_name
 * @property string $university_country
 *
 * @property SiteExchangeProgram[] $siteExchangePrograms
 */
class Universities extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'site_universities';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['university_name', 'university_country'], 'required'],
            [['university_name'], 'string', 'max' => 255],
            [['university_country'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'university_id' => 'University ID',
            'university_name' => 'University Name',
            'university_country' => 'University Country',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSiteExchangePrograms()
    {
        return $this->hasMany(SiteExchangeProgram::className(), ['university_id' => 'university_id']);
    }
}
