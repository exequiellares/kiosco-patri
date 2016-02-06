<div>
    <div>menu lateral</div>
    <div>contenido</div>
</div>

<div>
    <table>
        <thead>
            <tr>
                <th><?= __('Codigo')?></th>
                <th><?= __('Descripcion')?></th>
                <th><?= __('Precio')?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($products as $product): ?>
            <tr>
                <td><?= $product['Product']['id']?></td>
                <td><?= $product['Product']['description']?></td>
                <td><?= $this->Number->currency($product['Product']['price'], 'USD')?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
