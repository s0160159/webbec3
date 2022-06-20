<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style3.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="shortcut icon" href="icon_z3.png" type="image/png">
    <title>Задание 3</title>
     <style>
        body {
            background-image: url(bg.jpg);
        }

    </style>
</head>

<header>
    <h1>Задание 3</h1>
   </header>

<body>
    <div id="forma">
        <form action="index3.php" method="POST">

            <label>
                Имя:<br />
                <input name="name"
                       value=" "
                       type="text"/>
            </label><br />

            <label>
                E-mail:<br />
                <input name="email"
                       value=" "
                       type="email" />
            </label><br />

            <label>
                Год рождения:<br />
                <select name="year_of_birth">
                    <option value="default" hidden>выберите из списка</option>                    <option>2000</option>
                    <option>2001</option>
                    <option>2002</option> 
                    <option>2003</option>
                    <option>2004</option>
                </select>
            </label><br />
            
            Пол:<br />
            <label>
                <input type="radio"
                       name="gender" value="male" />
                мужской
            </label>
            <label>
                <input type="radio" 
                       name="gender" value="female" />
                женский
            </label><br />

            Количество конечностей:<br />
            <label>
                <input type="radio"
                       name="number_of_limbs" value="2" />
                2   
            </label>
            <label>
                <input type="radio" 
                       name="number_of_limbs" value="4" />
                4   
            </label><br />
            <label>
                <input type="radio"
                       name="number_of_limbs" value="other" />
                другое
            </label><br />

            <label>
                Сверхспособности:
                <br />
                <select name="superpowers-3[]"
                        multiple="multiple">
                    <option value="immortality">бессмертие</option>
                    <option value="passing_through_walls">прохождение сквозь стены</option>
                    <option value="levitation">левитация</option>
                </select>
            </label><br />

            <label>
                Биография:<br />
                <textarea name="biography"> </textarea>
            </label><br />

            С контрактом ознакомлен(а)
            <br />
            <label>
                <input type="checkbox" 
                       name="policy" />
                да
            </label><br />

            <input type="submit" value="Отправить" />
            
        </form>
    </div>

    <div>
        <footer>
            <h6>(c) Головчанская Дарья</h6>
        </footer>
    </div>

</body>
</html>
