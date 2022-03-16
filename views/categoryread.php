<?php

use Models\Categories;

$title = 'Вывод';
@include_once 'header.php';

?>
    <link rel="stylesheet" href="/assets/css/delete/delete.css">
<pre>
<?php $categories = new Categories();
$sql = "SELECT * FROM categories";
$findcategories = $categories->query($sql);
echo "<thead>
<table class='table'>
<tr>
    <th>Id</th>
    <th>Имя</th>
    <th>Приоритет</th>
    <th></th>
    <th></th>
</tr>
</thead>";
foreach ($findcategories as $findcategory) {
    echo "<tbody>";
    echo "<tr>";
    echo "<td> " . $findcategory["id"] . " </td>";
    echo "<td> " . $findcategory["name"] . " </td>";
    echo "<td> " . $findcategory["primary"] . " </td>";
    echo "<td><form action='' method='post'>
                        <input type='hidden' name='id' value='" . $findcategory["id"] . "' />
                        <input class='btn' type='submit' value='Удалить'>
                   </form></td>";
    echo "<td><a href='update.php?id=" . $findcategory["id"] . "'>Изменить</a></td>";
    echo "</tr>";
    echo "</tbody>";
}
?>
</pre>
<?php @include_once 'footer.php'; ?>