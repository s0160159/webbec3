<?php
// Отправляем браузеру правильную кодировку,
// файл index.php должен быть в кодировке UTF-8 без BOM.
header('Content-Type: text/html; charset=UTF-8');

// В суперглобальном массиве $_SERVER PHP сохраняет некторые заголовки запроса HTTP
// и другие сведения о клиненте и сервере, например метод текущего запроса $_SERVER['REQUEST_METHOD'].
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // В суперглобальном массиве $_GET PHP хранит все параметры, переданные в текущем запросе через URL.
    if (!empty($_GET['save'])) {
        // Если есть параметр save, то выводим сообщение пользователю.
        print('Спасибо, результаты сохранены!');
    }
    // Включаем содержимое файла form3.php.
    include('form3.php');
    // Завершаем работу скрипта.
    exit();
}
// Иначе, если запрос был методом POST, т.е. нужно проверить данные и сохранить их в XML-файл.
// Проверяем ошибки.
$errors = FALSE;
if (empty($_POST['name'])) {
    print('заполни имя.<br/>');
    $errors = TRUE;
}
if (!preg_match("/@/",$_POST['email'])) {
    print('заполни email.<br/>');
    $errors = TRUE;
}
if ($_POST['year_of_birth'] == "default") {
    print('выбери год рождения.<br/>');
    $errors = TRUE;
}
if (empty($_POST['gender'])) {
    print('выбери пол.<br/>');
    $errors = TRUE;
}
if (empty($_POST['number_of_limbs'])) {
    print('выбери количество конечностей.<br/>');
    $errors = TRUE;
}
if (empty($_POST['superpowers-3'])) {
    print('выбери сверхспособность(и).<br/>');
    $errors = TRUE;
}
if (empty($_POST['biography'])) {
    print('расскажи о себе.<br/>');
    $errors = TRUE;
}
if (empty($_POST['policy'])) {
    print('ознакомься с политикой конфиденциальности.<br/>');
    $errors = TRUE;
}

if ($errors) {
    // При наличии ошибок завершаем работу скрипта.
    exit();
}

$user = 'u47560';
$pass = '7678381';
$db = new PDO('mysql:host=localhost;dbname=u47560', $user, $pass, array(PDO::ATTR_PERSISTENT => true));

// Подготовленный запрос. Не именованные метки.
try {
    $stmt = $db->prepare("INSERT INTO my_table SET name = ?, email = ?, year_of_birth = ?, gender = ?, number_of_limbs = ?, biography = ?");
    $stmt->execute(array(
         $_POST['name'],
         $_POST['email'],
         $_POST['year_of_birth'],
         $_POST['gender'],
         $_POST['number_of_limbs'],
         $_POST['biography'],
    ));  
   
    $stmt = $db->prepare("INSERT INTO superpowers SET name = ?");
    $stmt->execute(array(
        $_POST['superpowers-3'] = implode(', ', $_POST['superpowers-3']),
    ));
} 
catch (PDOException $e) {
    print('Error : ' . $e->getMessage());
    exit();
}

//  stmt - это "дескриптор состояния".

// Делаем перенаправление.
// Если запись не сохраняется, но ошибок не видно, то можно закомментировать эту строку чтобы увидеть ошибку.
// Если ошибок при этом не видно, то необходимо настроить параметр display_errors для PHP.
header('Location: ?save=1');
?>
