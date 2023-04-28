<?php

namespace common\models\referensi;

use Yii;

/**
 * This is the model class for table "REF_AGAMA".
 *
 * @property int $ID
 * @property string|null $AGAMA
 * @property string|null $CREATE_AT
 * @property string|null $UPDATE_AT
 */
class RefAgama extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'REF_AGAMA';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CREATE_AT', 'UPDATE_AT'], 'safe'],
            [['AGAMA'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'AGAMA' => 'Agama',
            'CREATE_AT' => 'Create At',
            'UPDATE_AT' => 'Update At',
        ];
    }
}
