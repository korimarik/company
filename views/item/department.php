<?php
/**
 * Created by PhpStorm.
 * User: Dimitrie.M
 * Date: 13.04.2017
 * Time: 10:21
 */

if (isset($infoDepartment['department_name'])) {
    ?>
    <table>
        <tr>
            <td class="table_header">Назва департаменту:</td>
            <td class="table_value"><?= $infoDepartment['department_name']; ?></td>
        </tr>
        <tr>
            <td class="table_header">Опис:</td>
            <td class="table_value"><?= $infoDepartment['description']; ?></td>
        </tr>
        <tr>
            <td class="table_header">Дочірні департаменти:</td>
            <td class="table_value">
                <?php if(!empty($childDepartmentList)) { ?>
                <ul>
                    <?php
                    foreach ($childDepartmentList as $item) {
                        ?>
                        <li>
                            <a target="_blank" href="?c=item&a=department&id=<?= $item['id']; ?>"
                               title="Відкрити у новій вкладинці"><?= $item['department_name']; ?></a>
                        </li>
                    <?php } ?>
                </ul>
                <?php } else { ?>
                    <span class="empty_value">відсутні</span>
                <?php } ?>
            </td>
        </tr>
        <tr>
            <td class="table_header">Співробітники:</td>
            <td class="table_value">
                <?php if(!empty($listEmployees)) { ?>
                <ul>
                    <?php
                    foreach ($listEmployees as $item) {
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
            <td class="table_header">Створено:</td>
            <td class="table_value"><?= $infoDepartment['created_date']; ?></td>
        </tr>
    </table>
<?php } else {
    ?>
    <h2>Інформація по відділу не знайдена</h2>
    <a href="/" title="Повернутись на головну">Повернутись на головну</a>
    <?php
}
?>
