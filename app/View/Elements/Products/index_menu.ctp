<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Menu</h3>
    </div>
    <div class="panel-body">
        <ul class="nav nav-pills nav-stacked">
            <li role="presentation"><?= $this->Html->link('Listar Productos', ['action' => 'index'])?></li>
            <li role="presentation"><?= $this->Html->link('Agregar Producto', ['action' => 'add'])?></li>
            <li role="presentation"><?= $this->Html->link('Buscar', ['action' => 'search'])?></li>            
        </ul>
    </div>
</div>