Jak se co zapisuje v PHP
---

- řádek musí být ukončen středníkem

### Proměnné
- proměnná, do které je uloženo celé číslo: `$promenna = 1;`
- proměnná, do které je uložen textový řetězec: `$promenna = "text";`
- proměnná, do které je uloženo desetinné číslo: `$promenna = 1.05;`
- proměnná, do které je uložena logická hodnota: `$promenna = true;`

### Pole
- jednorozměrné, vícerozměrné, asociativní
- definice pole: `$pole = [1, 2, 3];` nebo `$pole = array(1, 2, 3);`
- přístup k prvkům podle indexů: např `$pole[0]`
- asociativní pole: klíčem / indexem může být jakákoliv hodnota
- definice asociativního pole: `$pole = ["klic1" => 1, "klic2" => 2, "klic2" => 3];`
- přístup k prvkům asociativního pole: např. `$pole["klic1"]` (vrátí hodnotu 1)
- lze kombinovat, např. `$pole = [ ["klic" => 1], ["klic" => 2], ["klic" => 3] ];`
- přístup k prvku: `$pole[0]` vrátí pole `["klic" => 1]`
- přístup k prvku: `$pole[0]["klic"]` vrátí hodnotu 1

### IF
`if (logicka hodnota) {  } else if (logicka hodnota) {  } else { } `

### Cyklus FOR
`for ($i = 0; $i < nejakaHodnota; $i++) {  }`
- `$i` je pomocná proměnná
- v každém průchodu cyklem ji mohu zvětšovat nebo zmenšovat `$i++` nebo `$i--` 
- `nejakaHodnota` - hodnota, která se kontroluje v každém průchodu cyklem (pokud je `true`, pokračuje se v cyklu)

### Funkce
`function nejakaFunkce() {  }`
- `nejakaFunkce` je název funkce
- závorky obsahují argumenty funkce (funkce může být i bez argumentů)
- argumenty oddělujeme čárkou, např. `function nejakaFunkce($parametr1, $parametr2, $parametr3) {  }`
- argumenty mohou mít výchozí hodnotu, ty definujeme podobně jako proměnné, např. `function nejakaFunkce($parametr1 = "hodnota", $parametr2 = 5, $parametr3 = true) {  }`
- pokud budeme volat funkci bez zadání argumentů, použije se výchozí hodnota
- volání funkce: např. `nejakaFunkce();`, příp. s argumenty `nejakaFunkce("test", 10, false);`
- většinou funkce vrací nějakou hodnotu, použijeme klíčové slovo `return`, např. `return $promenna;`

### Výpis
- klíčové slovo `echo`, např. `echo 1;`, `echo "ahoj";`, `echo nejakaFunkce();`

### Spojení řetězců
- používáme operátor `.`
- např. `"text1" . "text2";`
- např. `$promenna . "text";`
