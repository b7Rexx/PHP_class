<html>
<style>
    hr {
        color: blue;
    }
</style>
<pre>
<div style="float:left;width:49%;">
    <?php
    //Trying out some of the predefined functions

    $a = '1';
    $b = '2';
    $str = "hello, world";
    $arr = [1, 'a', 'b', 2, 'c', 3, 'd', 4];
    $Array = [
        ['1', 'a', 'qwe'],
        ['asd', '2', 'b'],
        ['c', 'zxc', '3']];

    $assocArray = [
        'i1' => ['k1' => 'v1'],
        'j1' => ['a1' => 'b1'],
        'i2' => ['k2' => 'v2']];

    //
    echo sizeof($Array);
    echo "<hr>";

    //
    for ($i = 0; $i < count($Array); $i++) {
        sort($Array[$i]);
    }
    print_r($Array);
    echo "<hr>";

    //
    if (in_array(1, $Array[0])) {
        echo 'exists';
    } else {
        echo 'not exist';
    }
    echo "<hr>";

    //
    list($var1, $var2) = $Array;
    print_r($var1);
    print_r($var2);
    echo "<hr>";

    //
    $arr1 = compact("a", "b", "arr");
    print_r($arr1);
    echo "<hr>";

    //
    $exp = explode("l", $str);
    print_r($exp);
    echo '<br>';

    //
    $imp = implode("_", $exp);
    echo $imp;
    echo "<hr>";

    ?>
</div>
<div style="float:right;width:49%">
    <?php
    //
    $ext = extract($assocArray);
    echo $ext;
    echo "<hr>";

    //
    $value = array_sum($arr);
    var_dump($value);
    echo "<br> sum = {$value}";
    echo "<hr>";

    //
    array_multisort($arr);
    print_r($arr);
    echo "<hr>";

    //
    echo array_key_exists('j1',$assocArray);
    ?>
</div>
</pre>
</html>