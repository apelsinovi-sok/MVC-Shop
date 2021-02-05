<?php
require 'vendor/autoload.php';
use Intervention\Image\ImageManager;

class MainAdminPanel{

	private static function DataRecording($picture_name){
        $product = R::dispense('product');
        $product->name=$_POST['name'];
        $product->category=$_POST['category'];
        $product->content_big=$_POST['content_big'];
        $product->price=$_POST['price'];
        $product->discount='0';
        $product->date=date("m.d.y");
        $product->picture=$picture_name.'.jpg';
        R::store($product);
   }

	public static function LoadingProduct(){
	   $manager = new ImageManager(array('driver' => 'imagick'));
       $picture_name = uniqid('picture');
       self::DataRecording($picture_name);
	   $picture = $manager->make($_FILES['picture']['tmp_name'])->resize(800, 528)->save(ROOT.'/img/'.$picture_name.'.jpg');
       
      
	}
}



?>