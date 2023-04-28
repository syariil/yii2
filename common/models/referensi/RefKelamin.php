<?php

namespace common\models\referensi;

use Yii;

/**
 * This is the model class for table "REF_KELAMIN".
 *
 * @property int $ID
 * @property string|null $JENIS_KELAMIN
 * @property string|null $CREATE_DATE
 * @property int|null $CREATE_BY
 * @property string|null $CREATE_IP
 * @property string|null $UPDATE_DATE
 * @property int|null $UPDATE_BY
 * @property string|null $UPDATE_IP
 */
class RefKelamin extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'REF_KELAMIN';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CREATE_DATE', 'UPDATE_DATE'], 'safe'],
            [['CREATE_BY', 'UPDATE_BY'], 'integer'],
            [['JENIS_KELAMIN'], 'string', 'max' => 20],
            [['CREATE_IP', 'UPDATE_IP'], 'string', 'max' => 22],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'JENIS_KELAMIN' => 'Jenis Kelamin',
            'CREATE_DATE' => 'Create Date',
            'CREATE_BY' => 'Create By',
            'CREATE_IP' => 'Create Ip',
            'UPDATE_DATE' => 'Update Date',
            'UPDATE_BY' => 'Update By',
            'UPDATE_IP' => 'Update Ip',
        ];
    }
}
