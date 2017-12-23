<?php
//123-45-67+89=100

$num = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$Bum = ['', '+', '-'];

for ($a = 0; $a <= 2; $a++) {
    $sum = 0;
    $A = sumAB($num[0], $num[1], $Bum[$a]);
    for ($b = 0; $b <= 2; $b++) {
        $B = sumAB($A, $num[2], $Bum[$b]);

        for ($c = 0; $c <= 2; $c++) {
            $C = sumAB($B, $num[3], $Bum[$c]);

            for ($d = 0; $d <= 2; $d++) {
                $D = sumAB($C, $num[4], $Bum[$d]);

                for ($e = 0; $e <= 2; $e++) {
                    $E = sumAB($D, $num[5], $Bum[$e]);

                    for ($f = 0; $f <= 2; $f++) {
                        $F = sumAB($E, $num[6], $Bum[$f]);

                        for ($g = 0; $g <= 2; $g++) {
                            $G = sumAB($F, $num[7], $Bum[$g]);

                            for ($h = 0; $h <= 2; $h++) {
                                $H = sumAB($G, $num[8], $Bum[$h]);

                                $ma ="return $H;";
                                $sum = eval($ma);
                                if($sum == 100)
                                {
                                    echo "$H = $sum "."<br>";
                                }
                            }
                            }
                    }
                }
            }
        }
    }
}


function sumAB($val1, $val2, $operate)
{
    $val3 = $operate;
    switch ($val3) {
        case '':
            $PA = $val1 . $val2;
            break;
        case '+':
            $PA = $val1 . $val3 . $val2;
            break;
        case '-':
            $PA = $val1 . $val3 . $val2;
            break;
        default:
    }
    return $PA;
}
