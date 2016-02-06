<div>
    <?php
        echo $this->Form->create('Product');
    ?>
    <fieldset>
        <legend><?= __('Editar Producto') ?></legend>
        <?= $this->Form->input('description',['label' => 'Descripcion'])?>
        <?= $this->Form->input('price',['label' => 'Precio'])?>
        <?= $this->Form->submit('Editar Producto')?>
    </fieldset>
</div>