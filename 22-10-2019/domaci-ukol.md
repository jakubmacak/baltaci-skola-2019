# Domácí úkol
- odevzdat do 5.11.2019 do 9:00
- poslat soubor .php e-mailem na macak@priasystem.cz
- úkol bude hodnocen známkou, tj. NEJEDNÁ se o dobrovolný úkol
- dotazy pište na e-mail macak@priasystem.cz
- jedná se o dvě jednoduché funkce, velmi podobné jsme zkoušeli na poslední hodině

## Zadání
1. Definujte funkci `textChange`. Funkce bude mít jeden argument (textový řetězec). Funkce bude vracet upravený text tak, že na začátku a na konci budou odstraněny bílé znaky a první písmeno celého řetězce bude převedeno na velké písmeno. Nápověda zde: https://www.w3schools.com/php/php_ref_string.asp
- Pokud předáme funkci text `   nejaky teXT `, výsledkem bude `Nejaky teXT`.
2. Definujte funkci `printAssociativeArray`. Funkce bude mít jeden argument - pole. Jednotlivé prvky v poli budou asociativním polem, viz příklad níže. Funkce bude VYPISOVAT jednotlivé prvky pole tak, že každá položka bude v samostatném divu. Klíče asociativního pole budou `id` a `text`.
- Pole, které bude předáno funkci jako argument: `$pole = [ ['id' => 1, 'text' => 'nejaky text'], ['id' => 2, 'text' => 'nejaky dalsi text'] ]`.
- Po zavolání funkce dostaneme následující výpis: `<div>1</div><div>nejaky text</div><div>2</div><div>nejaky dalsi text</div>`.
