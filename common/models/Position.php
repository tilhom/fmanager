<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%position}}".
 *
 * @property integer $id
 * @property string $abbr
 * @property string $name
 *
 * @property Player[] $players
 */
class Position extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'foot_position';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['abbr', 'name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'abbr' => 'Abbr',
            'name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlayers()
    {
        return $this->hasMany(Player::className(), ['position' => 'id']);
    }
}
