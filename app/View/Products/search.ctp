<?php
    $this->assign('title','Buscar Productos'); 
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
            <div class="buscar-producto">
                <?php echo $this->Form->create('search-form', array(
                        'inputDefaults' => array(
                                'div' => 'form-group',
                                'label' => false,
                                'wrapInput' => false,
                                'class' => 'form-control'
                        ),
                        'class' => 'form-inline'
                )); ?>
                    <?php echo $this->Form->input('searchedStrings', array(
                    )); ?>
                   
                    <?php echo $this->Form->submit('Buscar', array(
                            'div' => 'form-group',
                            'class' => 'btn btn-default'
                    )); ?>
                <?php echo $this->Form->end(); ?>
            </div>

            <div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th><?= __('ID')?></th>
                            <th><?= __('Descripción')?></th>
                            <th><?= __('Precio')?></th>
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

        </div>

    </div>
    
</div>


