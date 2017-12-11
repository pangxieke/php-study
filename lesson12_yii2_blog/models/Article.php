<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "blog_article".
 *
 * @property integer $id
 * @property integer $category_id
 * @property integer $user_id
 * @property string $title
 * @property string $content
 * @property integer $status
 * @property integer $created
 * @property integer $modified
 * @property integer $comment_status
 * @property string $password
 */
class Article extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blog_article';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id', 'user_id', 'title', 'content'], 'required'],
            [['category_id', 'user_id', 'status', 'created', 'modified', 'comment_status'], 'integer'],
            [['content'], 'string'],
            [['title', 'password'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Category ID',
            'user_id' => 'User ID',
            'title' => 'Title',
            'content' => 'Content',
            'status' => 'Status',
            'created' => 'Created',
            'modified' => 'Modified',
            'comment_status' => 'Comment Status',
            'password' => 'Password',
        ];
    }
}
