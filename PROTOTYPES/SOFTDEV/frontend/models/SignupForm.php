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
    public $marital_status;
    public $active_inactive;
    public $birth_year;
    public $organization;
    public $type;
    public $total_user;
    public $barangay;
    public $city_municipal;
    public $province;
    public $region;
    public $image;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'filter', 'filter' => 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],

            ['first_name', 'string', 'max' => 255],
            ['first_name', 'required'],

            ['middle_name', 'string', 'max' => 255],

            ['last_name', 'string', 'max' => 255],
            ['last_name', 'required'],

            ['contact', 'string', 'max' => 45],

            ['marital_status', 'string', 'max' => 7],
            ['marital_status', 'required'],


            ['active_inactive', 'string', 'max' => 8],

            ['birth_year', 'required'],

            ['organization', 'string', 'max' => 255],
            ['type', 'string', 'max' => 45],
            ['total_user', 'integer'],
            ['barangay', 'string', 'max' => 255],

            ['city_municipal', 'string', 'max' => 255],
            ['city_municipal', 'required'],

            ['province', 'string', 'max' => 255],

            ['region', 'string', 'max' => 255],
            ['region', 'required'],

            ['image','string', 'max' => 255],


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
        $user->marital_status = $this->marital_status;
        $user->active_inactive = $this->active_inactive;
        $user->birth_year = $this->birth_year;
        $user->organization = $this->organization;
        $user->type = $this->type;
        $user->total_user = $this->total_user;
        $user->barangay = $this->barangay;
        $user->city_municipal = $this->city_municipal;
        $user->province = $this->province;
        $user->region = $this->region;
        $user->image = $this->image;

        return $user->save() ? $user : null;
    }
}
