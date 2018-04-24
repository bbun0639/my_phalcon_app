<?php
use Phalcon\Mvc\View; // เรียกใช้ความสามารถของ function view
use Phalcon\Mvc\Controller;

class ControllerBase extends Controller{
 
   
  public function initialize() { // function ที่จะถูกเรียนใช้งานก่อนทุกครั้ง ที่เริ่มระบบ
  
    $this->assets
      ->collection('styles') // pack ไฟล์ css ที่ต้องการใช้งาน
      ->addCss('public/vendor/bootstrap/css/bootstrap.min.css')
      ->addCss('public/vendor/font-awesome/css/font-awesome.min.css')
      ->addCss('https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800')
      ->addCss('https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic')
      ->addCss('public/vendor/magnific-popup/magnific-popup.css')
	  ->addCss('public/css/creative.css');
	$this->assets
      ->collection('styleslogin') // pack ไฟล์ css ที่ต้องการใช้งาน
      ->addCss('https://fonts.googleapis.com/css?family=Kanit')
      ->addCss('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css')
	  ->addCss('public/css/creative.css');
    $this->assets
      ->collection('scripts') // pack ไฟล์ js ที่ต้องการใช้งาน
      ->addJs('public/vendor/jquery/jquery.min.js')
      ->addJs('public/vendor/bootstrap/js/bootstrap.bundle.min.js')      
      ->addJs('public/vendor/jquery-easing/jquery.easing.min.js')
      ->addJs('public/vendor/scrollreveal/scrollreveal.min.js')
      ->addJs('public/vendor/magnific-popup/jquery.magnific-popup.min.js')
    ->addJs('public/css/creative.js');
     
  }
	
  public function checkAuthen()
  {
	 if(!$this->session->has('memberAuthen')) // ตรวจสอบว่ามี session การเข้าระบบ หรือไม่
    		 $this->response->redirect('authen');   
   }
}
