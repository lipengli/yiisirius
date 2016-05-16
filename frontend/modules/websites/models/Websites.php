<?php

namespace frontend\modules\websites\models;

use Yii;

/**
 * This is the model class for table "admin".
 *
 * @property integer $id
 * @property integer $admin_status
 * @property string $admin_name
 * @property string $admin_email
 * @property string $admin_phone
 * @property string $admin_password
 * @property string $admin_city
 * @property integer $is_partner
 * @property string $add_time
 * @property string $update_time
 * @property string $company_id
 */
class Websites extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'admin';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['admin_status', 'is_partner'], 'integer'],
            [['admin_name', 'admin_email', 'admin_phone', 'admin_password', 'add_time'], 'required'],
            [['add_time', 'update_time'], 'safe'],
            [['admin_name', 'admin_email', 'company_id'], 'string', 'max' => 50],
            [['admin_phone'], 'string', 'max' => 11],
            [['admin_password', 'admin_city'], 'string', 'max' => 60],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'admin_status' => 'Admin Status',
            'admin_name' => 'Admin Name',
            'admin_email' => 'Admin Email',
            'admin_phone' => 'Admin Phone',
            'admin_password' => 'Admin Password',
            'admin_city' => 'Admin City',
            'is_partner' => 'Is Partner',
            'add_time' => 'Add Time',
            'update_time' => 'Update Time',
            'company_id' => 'Company ID',
        ];
    }
}
