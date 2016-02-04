<?php
App::uses('AppController', 'Controller');
/**
 * Products Controller
 */
class ProductsController extends AppController {

/**
 * Scaffold
 *
 * @var mixed
 */
	public $scaffold;
                
    public function index(){
        $products = $this->Product->find('all');
        $this->set('products', $products);
    }

}
