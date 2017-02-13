<?php
$mapping = array(
    'pdomysql' => __DIR__ . '/controller/pdomysql.php',
    'user' => __DIR__ . '/controller/user.php',
    'admin' => __DIR__ . '/controller/admin.php',
    'posts' => __DIR__ . '/controller/posts.php',
    'soctable' => __DIR__ . '/controller/socTable.php',
    'ConnectionFactory' => __DIR__ . '/controller/ConnectionFactory.php',
    'address' => __DIR__ . '/controller/class.address.php',
        'post' => __DIR__ . '/controller/class.post.php',
);

spl_autoload_register(function ($class) use ($mapping) {
    if (isset($mapping[$class])) {
        require $mapping[$class];
    }
}, true);

?>
