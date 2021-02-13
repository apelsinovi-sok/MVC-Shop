<?php
class MainRegistration {



   private static function DataRecording(){
        $user = R::dispense('user');
        $user->email=$_POST['email'];
        $user->name=$_POST['name'];
        $user->lastname=$_POST['lastname'];
        $user->password=password_hash($_POST['password'], PASSWORD_DEFAULT);
        R::store($user);
   }


   private static function EmailChecking($email){
        if (R::find('user', 'email = ?', [$email])) {
             return true;
        }
        return false;
   }

   public static function DataChecking() {

        $error = array();

        if (empty(trim($_POST['email']))  or !preg_match('/^[A-Za-z0-9@.\s]+$/',$_POST['email'])) {
         	$error[] = 'Недопустимый почтовый ящик';
        }

        if (self::EmailChecking($_POST['email'])) {
          $error[] = 'Этот почтовый ящик уже занят';
        }

        if (empty(trim($_POST['name']))  or !preg_match('/^[А-Яа-я\s]+$/u',$_POST['name'])) {
          $error[] = 'Неккоректное имя';
        }

        if (empty(trim($_POST['lastname']))  or !preg_match('/^[А-Яа-я\s]+$/u',$_POST['lastname'])) {
          $error[] = 'Некорректная фамилия';
        }

        if (empty($_POST['password']) or !preg_match('/^[A-Za-z0-9.\s]+$/',$_POST['password'])) {
        	$error[] = 'Неккоректный пароль';
        }

        if (iconv_strlen($_POST['password'])<3) {
          $error[] = 'Пароль слишком короткий';
        } 

        if (empty($_POST['password2']) or $_POST['password'] != $_POST['password2']) {
        	$error[] = 'Пароли не совпадают';
        }



        if (empty($error)) {
          self::DataRecording();
          return true;
        }
          return $error = array_shift($error);
   }

}

?>
