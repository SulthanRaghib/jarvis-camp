<?php

$hewan = ["Kucing", "Kelinci", "Sapi", "Kambing", "Kuda"];

for ($i = 0; $i < count($hewan); $i++) {
    if ($hewan[$i] == "Sapi" || $hewan[$i] == "Kambing") {
        echo "Ketemu $hewan[$i] <br>";
        continue;
    }
    echo "Bukan ini <br>";
}
