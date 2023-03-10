<?php

namespace app\models;

use yii\base\Model;

/**
 * This is the model class for table "user_cases".
 *
 * @property string $Full Name
 * @property string $Phone Number
 * @property string $Date
 * @property string $Type of Service
 * 
 */


class AddCaseForm extends \yii\db\ActiveRecord
{  
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user_cases';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'number', 'date', 'service'], 'required'],
            [['name'], 'string', 'max' => 30],
            [['number'], 'string', 'min' => 10, 'max' => 10],
            [['date'], 'string', 'max' => 20],
            [['service'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'name' => 'name',
            'number' => 'number',
            'date' => 'date',
            'service' => 'service',
        ];
    }
}
