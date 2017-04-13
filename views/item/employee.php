<?php
/**
 * Created by PhpStorm.
 * User: Dimitrie.M
 * Date: 13.04.2017
 * Time: 10:21
 */

if (isset($infoEmployee['employee_name'])) {
    ?>
    <table>
        <tr>
            <td class="table_header">ПІБ:</td>
            <td class="table_value"><?= $infoEmployee['employee_name']; ?></td>
        </tr>
        <tr>
            <td class="table_header">Стать:</td>
            <td class="table_value"><?= $infoEmployee['gender']; ?></td>
        </tr>
        <tr>
            <td class="table_header">Вік:</td>
            <td class="table_value"><?= $infoEmployee['age']; ?></td>
        </tr>
        <tr>
            <td class="table_header">Посада:</td>
            <td class="table_value"><?= $infoEmployee['position_name']; ?></td>
        </tr>

        <tr>
            <td class="table_header">Підлеглі співробітники:</td>
            <td class="table_value">
                <?php if (!empty($childEmployeeList)) { ?>
                    <ul>
                        <?php
                        foreach ($childEmployeeList as $item) {
                            ?>
                            <li>
                                <a target="_blank" href="?c=item&a=employee&id=<?= $item['id']; ?>"
                                   title="Відкрити у новій вкладинці"><?= $item['employee_name']; ?></a>
                            </li>
                        <?php } ?>
                    </ul>
                <?php } else { ?>
                <span class="empty_value">відсутні</span>
                <?php } ?>
            </td>
        </tr>
        <tr>
            <td class="table_header">Відділи:</td>
            <td class="table_value">
                <ul>
                    <?php
                    foreach ($listDepartments as $item) {
                        ?>
                        <li>
                            <a target="_blank" href="?c=item&a=department&id=<?= $item['id']; ?>"
                               title="Відкрити у новій вкладинці"><?= $item['department_name']; ?></a>
                        </li>
                    <?php } ?>
                </ul>
            </td>
        </tr>
        <tr>
            <td class="table_header">Створено:</td>
            <td class="table_value"><?= $infoEmployee['created_date']; ?></td>
        </tr>
    </table>
<?php } else {
    ?>
    <h2>Інформація по співробітнику не знайдена</h2>
    <a href="/" title="Повернутись на головну">Повернутись на головну</a>
    <?php
}
?>