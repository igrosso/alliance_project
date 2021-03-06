<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "occupancy".
 *
 * @property integer $id
 * @property string $name
 * @property integer $mer_serc
 * @property integer $rate_group
 * @property integer $crime_group
 */
class Occupancy extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'occupancy';
    }

    public $bldg_rg;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'mer_serc', 'rate_group', 'crime_group', 'bldg_rg'], 'required'],
            [['mer_serc', 'rate_group', 'crime_group', 'bldg_rg'], 'integer'],
            [['name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'mer_serc' => Yii::t('app', 'Mer Serc'),
            'rate_group' => Yii::t('app', 'Rate Group'),
            'crime_group' => Yii::t('app', 'Crime Group'),
        ];
    }

    public function afterFind(){
        $this->bldg_rg = $this->rate_group<4?1:($this->rate_group>5?9:2);
    }
}
