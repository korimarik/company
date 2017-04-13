<?php
/**
 * Created by PhpStorm.
 * User: Dimitrie.M
 * Date: 12.04.2017
 * Time: 18:22
 */

?>

<!-- List of company's departments -->
<h3>Відділи Компанії</h3>
<ul>
    <?php foreach($department as $item) { ?>
        <li>
            <a href="?c=item&a=department&id=<?= $item['id']; ?>" title=""><?= $item['department_name']; ?></a>
        </li>
    <?php } ?>
</ul>
<hr />
<!-- List of company's employees -->
<h3>Співробітники Компанії</h3>
<ul>
    <?php foreach($employee as $item) { ?>
        <li>
            <a href="?c=item&a=employee&id=<?= $item['id']; ?>" title=""><?= $item['employee_name']; ?></a>
        </li>
    <?php } ?>
</ul>