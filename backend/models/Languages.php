<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "site_languages".
 *
 * @property integer $language_id
 * @property string $language_name
 *
 * @property SiteExchangeProgram[] $siteExchangePrograms
 */
class Languages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'site_languages';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['language_name'], 'required'],
            [['language_name'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'language_id' => 'Language ID',
            'language_name' => 'Language Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSiteExchangePrograms()
    {
        return $this->hasMany(SiteExchangeProgram::className(), ['language_id' => 'language_id']);
    }
}
