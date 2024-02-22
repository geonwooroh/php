<?php
//xampp
//웹 서버, db서버, ,php
//apache, mariaDB, PHP컴파일러
$txt = 'PHP';
echo "I love $txt";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Document</title>
</head>
<body>
    <h1>My first PHP page</h1>
<?php
    echo "hello world!";
    //주석
    #이것도 주석
    /*여러줄 주석*/ 
    //php는 페이지 소스보기 했을때 html과 달리 보이지 않기에 좀 더 보안에 좋다
?>
</body>
</html>