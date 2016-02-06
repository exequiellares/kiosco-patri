<?php
    $this->assign('title','Detalle de Producto'); 
?>
<div>
    <div class="col-md-12 titulo-pagina">
            <h1>Detalle del Producto</h1>
    </div>
    <div class="col-md-12">
        
        <div class="col-md-3 borde barra-lateral">
            <?= $this->element('Products/index_menu')?>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Acciones</h3>
                </div>
                <div class="panel-body">
                    <ul class="nav nav-pills nav-stacked">
                        <li role="presentation"><?= $this->Html->link('Editar', ['action' => 'edit', $product['Product']['id']])?></li>
                        <li role="presentation"><?= $this->Form->postLink('Eliminar', 
                                    ['action' => 'delete', $product['Product']['id']],
                                    ['confirm' => '¿Desea eliminar el producto: "' . $product['Product']['description'] .'"?',
                                        'class' => '']);?></li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="col-md-9 borde">

            <div class="">
                <table class="table table-striped">
                    <tr>
                        <th>ID</th>
                        <td><?= $product['Product']['id'];?></td>
                    </tr>
                    <tr>
                        <th>Descripción</th>
                        <td><?= $product['Product']['description'];?></td>
                    </tr>
                    <tr>
                        <th>Precio</th>
                        <td><?= $this->Number->currency($product['Product']['price'], 'USD');?></td>
                    </tr>
                    <tr>
                        <th>Fecha creación</th>
                        <td><?= $product['Product']['created'];?></td>
                    </tr>
                    <tr>
                        <th>Fecha última edición</th>
                        <td><?= $product['Product']['modified'];?></td>
                    </tr>
                </table>
            </div>

        </div>

    </div>
    
</div>


