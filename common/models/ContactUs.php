<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "contact_us".
 *
 * @property integer $mail_id
 * @property string $full_name
 * @property string $email
 * @property string $contact_number
 * @property string $message
 * @property integer $is_active
 * @property string $created_at
 */
class ContactUs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contact_us';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['message'], 'string'],
            [['is_active'], 'integer'],
            [['created_at','is_active'], 'safe'],
            [['full_name', 'email'], 'string', 'max' => 250],
            [['contact_number'], 'string', 'max' => 14]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'mail_id' => 'Mail ID',
            'full_name' => 'Full Name',
            'email' => 'Email',
            'contact_number' => 'Contact Number',
            'message' => 'Message',
            'is_active' => 'Is Active',
            'created_at' => 'Created At',
        ];
    }
    public function contact(){
        if ($this->validate()) {
            $this->save();
            Yii::$app->mailer->compose()
                    ->setFrom(Yii::$app->params['adminEmail'])
                    ->setTo(Yii::$app->params['adminEmail'])
                    ->setSubject($this->full_name)
                    ->setTextBody($this->message)
                    
                    //->setHtmlBody('<b>HTML content</b>')
                    ->send();
        }else {
            return false;
        }
    }
}
