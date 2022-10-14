<?php
namespace app\models;
use yii\base\Model;
use yii\db\ActiveRecord;
use yii\db\IdentityInterface;
class SignupForm extends Model{
    public $username;
    public $password;
    public $first_name;
    public $last_name;

    public function rules(){
        return [
            [["username", "password", 'first_name', 'last_name'], "required"],
        ];
    }
    public function attributeLabels(){
        return [
            'username' => 'Логин',
            'password' => 'Пароль',
            'first_name' => 'Имя',
            'last_name' => 'Фамилия',
        ];
    }
}