<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "book".
 *
 * @property string $id
 * @property string $book_name
 * @property string $author_name
 * @property string $year
 * @property string $publisher
 */
class Book extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'book';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'book_name', 'author_name', 'year', 'publisher'], 'required'],
            [['id'], 'string', 'max' => 10],
            [['book_name', 'author_name', 'year', 'publisher'], 'string', 'max' => 50],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'book_name' => 'Название книги',
            'author_name' => 'Автор',
            'year' => 'Год издания',
            'publisher' => 'Издательство',
        ];
    }
}
