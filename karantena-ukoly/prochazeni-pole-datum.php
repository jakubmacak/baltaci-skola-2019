// pole, kam se budou ukladat jednotlive dny (datum je klic v poli)
$podleDne = [];
if (mysqli_num_rows($result) === 0) {
    echo '<div>Restaurace nenalezena</div>';
} else {
    while ($row = mysqli_fetch_assoc($result)) {
        $datum = $row['datum'];
        // pokud datum neni v poli jako klic, vytvorim jej (pod klicem bude ulozeno pole)
        if (!array_key_exists($datum, $podleDne)) {
            $podleDne[$datum] = [];
        }
        $podleDne[$datum][] = ['nazev' => $row['nazev'], 'cena' => $row['cena']];
    }
}

echo '<h1>MENU</h1>';
// prochazim jednotlive polozky - klic je datum
foreach ($podleDne as $datum => $polozky) {
    echo '<strong>'.$datum.'</strong><br>';
    foreach ($polozky as $polozka) {
        echo 'nazev: ' . $polozka['nazev']. '<br>';
        echo 'cena: ' . $polozka['cena']. '<br>';
    }
    echo '<br>';
}
