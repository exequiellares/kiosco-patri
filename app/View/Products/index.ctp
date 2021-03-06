<?php
    $this->assign('title','Listar Productos'); 
?>
<div>
    <div class="col-md-12 titulo-pagina">
            <h1>Lista de Productos</h1>
    </div>
    <div class="col-md-12">
        
        <div class="col-md-3 barra-lateral">
            <?= $this->element('Products/index_menu')?>            
        </div>
        <div class="col-md-9">
            <?php echo $this->Flash->render(); ?>
            <div>
                <?php echo $this->Paginator->pagination(array(
                        'ul' => 'pagination'
                )); ?>
            </div>
            <div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th><?= $this->Paginator->sort('id','ID')?></th>
                            <th><?= $this->Paginator->sort('description','Descripción')?></th>
                            <th><?= $this->Paginator->sort('price','Precio')?></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($products as $product): ?>
                        <tr>
                            <td><?= $product['Product']['id']?></td>
                            <td><?= $product['Product']['description']?></td>
                            <td><?= $this->Number->currency($product['Product']['price'], 'USD')?></td>
                            <td><?= $this->Html->link('Detalle', ['action' => 'view', $product['Product']['id']])?> |   
                                <?= $this->Html->link('Editar',['action' => 'edit', $product['Product']['id']])?> | 
                                <?= $this->Form->postLink('Eliminar', 
                                    ['action' => 'delete', $product['Product']['id']],
                                    ['confirm' => '¿Desea eliminar el producto: "' . $product['Product']['description'] .'"?',
                                        'class' => '']);?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>    
            </div>
            <div>
                <?php echo $this->Paginator->pagination(array(
                        'ul' => 'pagination'
                )); ?>
            </div>
        </div>
        
    </div>
    
</div>


