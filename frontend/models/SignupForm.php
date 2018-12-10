<?php
namespace frontend\models;
require_once './vendor/autoload.php';

use yii\base\Model;
use common\models\User;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;


class Users {
    protected $database;
    protected $dbname = 'users';
    // $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/secret/sapiadvertiser-35f0f-a96e6598d2d9.json');

    // $firebase = (new Factory)
    //     ->withServiceAccount($serviceAccount)
    //     ->create();

    public function __construct(){
        $acc = ServiceAccount::fromJsonFile('C:/xampp/htdocs/webshop2/secret/sapiadvertiser-35f0f-a96e6598d2d9.json');
        $firebase = (new Factory)->withServiceAccount($acc)->create();

        $this->database = $firebase->getDatabase();
    }

    public function get(int $userID = NULL){
        if (empty($userID) || !isset($userID)) { return FALSE; }

        if ($this->database->getReference($this->dbname)->getSnapshot()->hasChild($userID)){
            return $this->database->getReference($this->dbname)->getChild($userID)->getValue();
        } else {
            return FALSE;
        }
    }

    public function insert(array $data) {
        if (empty($data) || !isset($data)) { return FALSE; }

        foreach ($data as $key => $value){
            $this->database->getReference()->getChild($this->dbname)->getChild($key)->set($value);
        }

        return TRUE;
    }

    public function delete(int $userID) {
        if (empty($userID) || !isset($userID)) { return FALSE; }

        if ($this->database->getReference($this->dbname)->getSnapshot()->hasChild($userID)){
            $this->database->getReference($this->dbname)->getChild($userID)->remove();
            return TRUE;
        } else {
            return FALSE;
        }
    }
}

//$users = new Users();

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;
    public $mobilnumber;


    /**
     * {@inheritdoc}
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

            ['mobilnumber', 'required'],
            ['mobilnumber','string','max'=>255],
            ['mobilnumber', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This number address has already been taken.'],

        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        // var_dump($users->insert([
        //    '6'=>'Rendszergazda'
        // ]));

        if (!$this->validate()) {
            return null;
        }
        
        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->mobilnumber=$this->mobilnumber;
        $user->setPassword($this->password);
        $user->generateAuthKey();

        // $users =new Users();
        //  var_dump($users->insert(['1'=>"$user->username,$user->email"
        //  ]));
        //$users->insert([$user]);
        //print_r($user);
       // var_dump($user);
        

        return $user->save() ? $user : null;
    }
}
