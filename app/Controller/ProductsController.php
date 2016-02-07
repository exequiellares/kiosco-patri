<?php
App::uses('AppController', 'Controller');
/**
 * Products Controller
 */
class ProductsController extends AppController {
    
    public $paginate = [
        'limit' => 10,
        'order' => [
            'Product.id' => 'asc'
        ]
    ];
                
    public function index(){
        $this->Paginator->settings = $this->paginate;
        $products = $this->Paginator->paginate('Product');
//        $products = $this->Product->find('all');
        $this->set('products', $products);
        
    }
    
    /*
     * Add a new product
     */
    public function add(){
        
        if($this->request->is('post'))
        {
            $this->Product->create();
            
            if($this->Product->save($this->request->data))
            {
                $this->Flash->alert(__('Producto registrado correctamente'), [
                    'params' => ['class' => 'alert-success']
                    ]);
                
                $this->redirect(['action' => 'index']);
            }
            
            $this->Flash->alert(__('No se pudo registrar el producto'), [
                    'params' => ['class' => 'alert-danger']
                    ]);

        }
        
        
    }
    
    /*
     * View product details
     */
    
    public function view($id = null)
    {
        $this->Product->id = $id;
        if(!$this->Product->exists())
        {
            throw new NotFoundException(__('Invalid user'));
        }
        $this->set('product',$this->Product->findById($id));
        
    }
    
    /*
     * Edit a product
     */
    public function edit($id = null)
    {
        if(!$id)
        {
            throw new NotFoundException('Producto no encontrado');
        }
        
        $this->Product->id = $id;
        
        if(!$this->Product->exists())
        {
           throw new NotFoundException(__('Producto no encontrado'));
        }
        
        if($this->request->is('post') || $this->request->is('put'))
        {
                       
            if($this->Product->save($this->request->data))
            {
                $this->Flash->alert(__('Producto editado correctamente'), [
                    'params' => ['class' => 'alert-success']
                    ]);
                
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->alert(__('No se pudieron guardar los cambios en el producto'), [
                    'params' => ['class' => 'alert-danger']
                    ]);
        }
                
        $product = $this->Product->findById($id);
        $this->request->data = $product;
        $this->set('product',$product);
    }
    
    public function delete($id)
    {
        // delete action can not be called from a get request
        // or if the logged user try to delete himself
     
        if($this->request->is('get'))
        {
            throw new MethodNotAllowedException();
        }
        
        if($this->Product->delete($id))
        {
            $this->Flash->alert(__('El producto fue eliminado'), [
                    'params' => ['class' => 'alert-success']
                    ]);
            
        }
        else
        {
            $this->Flash->alert(__('No se pudo eliminar el producto'), [
                    'params' => ['class' => 'alert-danger']
                    ]);
           
        }
        
        return $this->redirect(['action' => 'index']);
    }
    
    /*
     * Search a product
     */
    public function search()
    {
        $products = array();
        if($this->request->is('post'))
        {
            // perform the search
            $searchStrings = $this->request->data['search-form']['searchedStrings'];
            
            if(trim($searchStrings) == '')
            {
                $products = $this->Product->find('all');
            }
            else
            {
                $keys = explode(' ', $searchStrings);
                $where = '0';
                foreach ($keys as $key)
                {   
                    
                        $where .= ' OR (description LIKE \'%' . $key . '%\')';
                }
                 
                $query = 'SELECT * FROM products as Product WHERE (' . $where. ')';
                
                $this->set('query',$query);
                $products = $this->Product->query($query);
               
            }
        }
        
        $this->set('products', $products);
    }

}
