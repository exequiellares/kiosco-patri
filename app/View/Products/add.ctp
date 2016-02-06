<?php
    $this->assign('title','Nuevo Producto'); 
?>
<div>
    <div class="col-md-12 titulo-pagina">
            <h1>Nuevo Producto</h1>
    </div>
    <div class="col-md-12">
        
        <div class="col-md-3 barra-lateral">
           <?= $this->element('Products/index_menu')?>            
        </div>
        <div class="col-md-9">

            <div>
                 <?php echo $this->Form->create('Product', array(
                        'inputDefaults' => array(
                                'div' => 'form-group',
                                'wrapInput' => false,
                                'class' => 'form-control'
                        ),
                        'class' => 'well'
                    )); 
                 ?>
                <fieldset>
                    <?php echo $this->Form->input('description', array(
                            'label' => 'Descripción',
                            'placeholder' => 'Descripción del producto',
//                            'after' => '<span class="help-block">Example block-level help text here.</span>'
                    )); ?>
                    <?php echo $this->Form->input('price', array(
                            'label' => 'Precio',
                            'placeholder' => '',
//                            'after' => '<span class="help-block">Example block-level help text here.</span>'
                    )); ?>
                    <?php echo $this->Form->submit('Agregar', array(
                            'div' => 'form-group',
                            'class' => 'btn btn-default'
                    )); ?>
                </fieldset>
                <?php echo $this->Form->end(); ?>   
            </div>

        </div>

    </div>
    
</div>


