<?php
namespace frontend\models;

use yii\base\Model;
use common\models\User;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;
    public $first_name;
    public $middle_name;
    public $last_name;
    public $contact;
    public $birthdate;
    public $type;
    public $external_type;
    public $status;
    public $region_id;
    public $barangay_id;
    public $city_municipal_id;



    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],

            ['first_name', 'required'],
            ['first_name', 'string', 'max' => 45],

            ['middle_name', 'string', 'max' => 45],

            ['last_name', 'required'],
            ['last_name', 'string', 'max' => 45],

            ['contact', 'required'],
            ['contact', 'string', 'max' => 11],

            ['birthdate', 'required'],

            ['type', 'required'],
            ['type', 'string', 'max' => 45],

            ['external_type', 'required'],
            ['external_type', 'string', 'max' => 45],

            ['status', 'string', 'max' => 45],

            ['region_id', 'required'],
            ['barangay_id', 'required'],
            ['city_municipal_id', 'required'],


        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();

        $user->first_name = $this->first_name;
        $user->middle_name = $this->middle_name;
        $user->last_name = $this->last_name;
        $user->contact = $this->contact;
        $user->birthdate = $this->birthdate;
        $user->type = $this->type;
        $user->external_type = $this->external_type;
        $user->status = $this->status;
        $user->region_id = $this->region_id;
        $user->barangay_id = $this->barangay_id;
        $user->city_municipal_id = $this->city_municipal_id;

        return $user->save() ? $user : null;
        
    }

    public function attributeLabels()
    {
        return [
            'region_id' => 'Region',
            'city_municipal_id' => 'City Municipal',
            'barangay_id' => 'Barangay',

        ];
    }
}

