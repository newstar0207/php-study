<html>
<body>
<?php 
    $a = 1; // 변수
    echo $a + 1; # 2(주석)
    echo "<br />";
    $a = 2;
    print $a + 1; # 3
    echo "<br />";
    $first = "coding";
    echo $first." everybody";
    echo "<br />";
    define('TITLE', 'PHP Tutorial'); // 상수
    echo TITLE;

    // 형변환
    echo "<br />";
    $a = 100;
    echo gettype($a);
    settype($a, 'double');
    echo "<br />";
    echo gettype($a);

    // 가변변수
    echo "<br />";
    $title  = 'subject';
    echo "<br />";
    $$title = 'PHP tutorial'; // $title = subject => $subject
    echo $subject;

    // 비교
    echo "<br />";
    echo "1 == 2 : ";
    var_dump(1==2); // 변수의 정보를 출력하는 함수
    echo "<br />";
    echo "1 == 1 : ";
    var_dump(1==1);
    echo "<br />";
    echo '"one" == "one" : ';
    var_dump("one" == "one");
    echo "<br />";
    echo "1 != 2 : ";
    var_dump(1 != 2);
    echo "<br />";
    echo "10 > 20 : ";
    var_dump(10 > 20);



?>

</body>
</html>