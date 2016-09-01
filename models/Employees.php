<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "employees".
 *
 * @property integer $id
 * @property string $cid
 * @property string $pname
 * @property string $fname
 * @property string $lname
 * @property integer $sex
 * @property string $birthdate
 * @property string $address
 * @property integer $tumbon
 * @property integer $ampur
 * @property integer $chw
 * @property string $education
 * @property string $ability
 * @property string $tel
 * @property integer $department_id
 * @property string $comein
 * @property string $avatar
 * @property integer $status
 */
class Employees extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'employees';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sex', 'tumbon', 'ampur', 'chw', 'department_id', 'status'], 'integer'],
            [['birthdate', 'comein'], 'safe'],
            [['education'], 'string'],
            [['cid', 'address', 'ability', 'avatar'], 'string', 'max' => 255],
            [['pname', 'fname', 'lname'], 'string', 'max' => 100],
            [['tel'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cid' => 'Cid',
            'pname' => 'Pname',
            'fname' => 'Fname',
            'lname' => 'Lname',
            'sex' => 'Sex',
            'birthdate' => 'Birthdate',
            'address' => 'Address',
            'tumbon' => 'Tumbon',
            'ampur' => 'Ampur',
            'chw' => 'Chw',
            'education' => 'Education',
            'ability' => 'Ability',
            'tel' => 'Tel',
            'department_id' => 'Department ID',
            'comein' => 'Comein',
            'avatar' => 'Avatar',
            'status' => 'Status',
        ];
    }
}
