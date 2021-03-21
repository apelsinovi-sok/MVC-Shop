<?php
require 'vendor/autoload.php';
use Intervention\Image\ImageManager;

class MainAdminPanel{//сохранение товара в бд
	public static $error = array();
  public static $lorem = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
	private static function DataRecording($picture_name){
        $product = R::dispense('product');
        $product->name=$_POST['name'];
        $product->category=$_POST['category'];
        $product->content_small=$_POST['content_small'];
				$product->content_big=self::$lorem;
        $product->price=$_POST['price'];
        $product->discount='0';
        $product->picture=$picture_name.'.jpg';
        R::store($product);
   }

	public static function LoadingProduct(){//вызов функций проверок

	     $manager = new ImageManager(array('driver' => 'imagick'));
       $picture_name = uniqid('picture');
       self::check_name($_POST['name']);
       self::check_content($_POST['content_small']);
       self::check_category($_POST['category']);
       self::check_price($_POST['price']);
       self::check_file($_FILES['picture']['type']);

       if(empty(self::$error)){//обрезка картинки
       self::DataRecording($picture_name);
	     $picture = $manager->make($_FILES['picture']['tmp_name'])->resize(1000, 528)->save(ROOT.'/img/'.$picture_name.'.jpg');
	}else{//вывод ошибок 
		echo '<script>
	            alert("'.array_shift(self::$error).'");
                </script>';

	}
	}


	private static function check_name($post){//условия проверки полей товара 

	if(iconv_strlen($post)>23 or iconv_strlen($post)<4){
		  self::$error[] = 'Неккоректное название';
	}
    }

    private static function check_file($post){
    if($post != 'image/jpeg' and $post != 'image/png'){
		  self::$error[] = 'Неверный формат картинки';
		}
    }

	private static function check_price($post){
		if(!preg_match('/^[0-9]+/', $post)){
          self::$error[] = 'В цене запрещенные символы';
    }
	}

   private static function check_content($post){
   	    if(iconv_strlen($post)<20){
   	      self::$error[] = 'Слишком короткое описание';
	}
}

	private static function check_category($post){
		if(!preg_match('/^[a-z]+/', $post)){
		  self::$error[] = 'Напишите категорию на латинице в нижнем регистре';
    }
	}

}



?>
