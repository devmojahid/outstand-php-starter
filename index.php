<?php
namespace App;
use App\Http\Controllers\FirstController;
echo "Hello World!";

/**
 *  Composer Autoload
 * @link https://getcomposer.org/doc/01-basic-usage.md#autoloading
 */

require_once 'vendor/autoload.php';

$firstController = new FirstController();
$users = $firstController->index();

?>
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user) : ?>
            <tr>
                <td><?php echo $user['id']; ?></td>
                <td><?php echo $user['name']; ?></td>
                <td><?php echo $user['email']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php

?>

<!-- // $config = require_once __DIR__ . '/config/database.php';
// $dsn = $config['driver'] . ':host=' . $config['host'] . ';dbname=' . $config['database'];
// $dsn2 = "mysql:host={$config['host']};dbname={$config['database']};charset={$config['charset']}";
// echo "<br> <pre>";
// var_dump($dsn2);
// echo "</pre>"; -->

