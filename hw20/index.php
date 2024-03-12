<?php
define('DB_HOST', 'mysql');
define('DB_PORT', '3306');
define('DB_NAME', 'hillel');
define('DB_CHARSET', 'utf8mb4');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('CLASSES_DIR', __DIR__ . '/classes/');

require CLASSES_DIR . 'Connector.php';
require CLASSES_DIR . 'SqlQueryBuilder.php';
require CLASSES_DIR . 'MySqlQueryBuilder.php';

$connector = Connector::getInstance();
$builder = new MySqlQueryBuilder();

//------ Пример ------
//INSERT INTO users (name, age, email, password, gender)
//VALUES ('TEst', '44', 'test@gmail.com', '123123', 'male');
//------ Реализация ------
$builder->insert('users', ['name' => 'Kate', 'age' => '17', 'email' => 'kate@ukr.net', 'password' => '5544433', 'gender' => 'female']);
$stmt = $connector->prepare($builder->getSQL());
$stmt->execute($builder->getValues());

//------ Пример ------
//DELETE
//FROM users
//WHERE name = 'Test';
//------ Реализация ------
$builder->delete('users')->where('name', 'Test');
$stmt = $connector->prepare($builder->getSQL());
$stmt->execute($builder->getValues());

//------ Пример ------
//SELECT id, name as user_name, email
//FROM users
//WHERE age > 27;
//------ Реализация ------
$builder->select('users', ['id', 'name'])
    ->where('age', 27, '>')
    ->limit(5);
$stmt = $connector->prepare($builder->getSQL());
$stmt->execute($builder->getValues());
echo "<pre>";
print_r($stmt->fetchAll());
echo "<pre>";

//------ Пример ------
//SELECT COUNT(id) as males
//FROM users
//WHERE gender = 'male';
//------ Реализация ------
$builder->select('users', ['COUNT(id)'])
    ->where('gender', 'male');
$stmt = $connector->prepare($builder->getSQL());
$stmt->execute($builder->getValues());
echo "<pre>";
print_r($stmt->fetch());
echo "<pre>";

//------ Пример ------
//SELECT *
//FROM users
//WHERE email LIKE '%gmail.com';
//------ Реализация ------
$builder->select('users')
    ->where('email', '%gmail.com', 'LIKE');
$stmt = $connector->prepare($builder->getSQL());
$stmt->execute($builder->getValues());
echo "<pre>";
print_r($stmt->fetchAll());
echo "<pre>";

//------ Пример ------
//UPDATE users
//SET age = 33
//WHERE id = 2;
//------ Реализация ------
$builder->update('users', ['age' => 33])->where('id', 2);
$stmt = $connector->prepare($builder->getSQL());
$stmt->execute($builder->getValues());

//------ Пример ------
//INSERT INTO posts (title, content, user_id)
//VALUES ('Title 7', 'Content 7', '3')
//------ Реализация ------
$builder->insert('posts', ['title' => 'Title 7', 'content' => 'Content 7', 'user_id' => '3']);
$stmt = $connector->prepare($builder->getSQL());
$stmt->execute($builder->getValues());

//------ Пример ------
//SELECT *
//FROM posts
//WHERE user_id = 3;
//------ Реализация ------
$builder->select('posts')
    ->where('user_id', 3,);
$stmt = $connector->prepare($builder->getSQL());
$stmt->execute($builder->getValues());
echo "<pre>";
print_r($stmt->fetchAll());
echo "<pre>";