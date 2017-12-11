<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "blog_category".
 *
 * @property integer $id
 * @property string $name
 * @property integer $status
 * @property integer $created
 * @property integer $modified
 * @property integer $pid
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blog_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'pid'], 'required'],
            [['status', 'created', 'modified', 'pid'], 'integer'],
            [['name'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'status' => 'Status',
            'created' => 'Created',
            'modified' => 'Modified',
            'pid' => 'Pid',
        ];
    }
}
