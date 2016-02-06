<?php
App::uses('AppController', 'Controller');
/**
 * Products Controller
 */
class ProductsController extends AppController {
                
    public function index(){
        $products = $this->Product->find('all');
        $this->set('products', $products);
    }
    
    public function add($id = null){
        
        if($this->request->is('post'))
        {
            $this->Product->create();
            
            if($this->Product->save($this->request->data))
            {
                $this->Flash->success(__('Producto registrado correctamente'));
                $this->redirect(['action' => 'index']);
            }
            
            $this->Flash->error(__('No se pudo registrar el producto'));
        }
        
    }

}
