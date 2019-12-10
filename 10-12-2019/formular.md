# Samostatny ukol 19. 11. 2019

Vasim hlavnim ukolem je promenit statickou html stranku, nachazejici se v souboru `index.php`, na dynamickou webovou stranku. V soubotu `index.php` naleznete kontaknti formular, ktery jsme za pomoci HTML a CSS vytvareli v predchozich hodinach. Vasim ukolem bude pridat PHP kod a upravit stvajici HTML kod v tomto souboru. Vysledkem vasi prace bude HTML stranka s kontaktnim formularem, ktera bude zpracovavat odeslani formulare a vykreslovat vysledek validace jednotlivych polozek.

## Vysledek
1. Pokud bude odeslan formular splnujici nize definovane pravidla, zobrazi se vysledek, ktery bude vypadat jako stranka `index-sucess.html`.
2. Pokud bude odeslan formular porusujici nize definovane pravidla, bude vykreslen vysledek podobny HTML strance `index-error.html`

## Pravidla
1. Jmeno nesmi byt prazne
2. Prijmeni nesmi byt prazne
3. Email musi obsahovat znak '@' a znak '.' v tomto poradi. Email muze byt prazdny.
4. Telefon musi zacinat znakem '+' a musi obsahovat pouze cisla s vyjimkou prvniho znaku. Zaroven validace musi ignorovat mezery (tj. mezery se nepocitaji mezi neplatne znaky). Priklady validnich hodnot tedy jsou: "+420777666555" stejne jako "+420 777 666 555". Telefon muze byt prazdny.
5. Alespon jedna z hodnot v sekci `Kontaktuj me` musi byt vybrana.
6. Pokud je v sekci `Kontaktuj me` vybrana moznost `E-mail`, pak musi byt v policku `E-mail` zadan platny email.
7. Pokud je v sekci `Kontaktuj me` vybrana moznost `Telefon`, pak musi byt v policku `Telefon` zadan platny telefon.
8. Prave jedna z hodnot v sekci `Pohlavi` musi byt vybrana.

## Postup:
1. Stahnete si soubory `index.php` a `style.css`

2. Upravte HTML kod formulare tak, aby odeslani probehlo metodou POST na adresu toho sameho souboru `index.php`.

3. Doplnte PHP kod, ktery vytahne hodnoty vsech polozek formulare a ulozi je do vhodne pojmenovanych promennych.

4. Napiste kod, ktery bude overovat hodnoty jednotlivych policek formulare ulozenych v promennych z predchoziho kroku dle pravidel definovanych vyse.

5. Validace kazde polozky formulare bude naprogramovana v samostane metode.

Tj. napriklad hodnota z policka `jmeno` bude ulozenena v promenne `$jmeno` a bude overena v metode `function overJmeno($jmeno)`. Idealni bude, pokud kazda takova metoda bude vracet hodnotu `true` nebo `false` podle toho, zda hodnota splnuje definovane pravidla nebo ne.

6. Pokud polozka formulare nesplnuje definovana pravidla vypiste chybu podobne, jako je ukazano v soubotu `index-error.html`.

7. Pokud vice polozek formulare obsahuje chybu, pak budou vypsany vsechny tyto chyby.

BONUSOVY UKOL: Pokud neni ve formulari zadna chyba, pak se vykresli hlaska tak, jako je ukazano v soubotu `index-sucess.html`
