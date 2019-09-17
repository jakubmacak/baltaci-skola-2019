# Úkol na opakování HTML + CSS + formulářů

Použijte následující [template](https://github.com/jakubmacak/baltaci-skola-2019/blob/master/template.html)

## HTML
1. vytvořte soubor `index.html`
2. vytvořte `div` s třídou `.container` (veškerý obsah bude v tomto divu)
3. vytvořte nadpis první úrovně s textem **Kontaktní formulář** 
4. vytvořte formulář (`<form></form>`)
5. vložte do formuláře následující pole - každé pole bude mít odpovídající `label`:
    1. jméno (typ `text`)
    2. příjmení (typ `text`)
    3. e-mail (typ `email`)
    4. telefon (typ `text`)
    5. zpráva (typ `textarea`)
    6. můžete mě kontaktovat (typ `checkbox`)
        - text **můžete mě kontaktovat** vložte do nadpisu druhé úrovně
        - první bude `input`, druhý `label`
        - každý `input` bude mít vlastní `label`
        - s hodnotami: e-mail, telefon
    7. pohlaví (typ `radio`)
        - text **pohlaví** vložte do nadpisu druhé úrovně
        - první bude `input`, druhý `label`
        - každý `input` bude mít vlastní `label`
        - použijte atribut `name` tak, aby bylo možné vybrat jen jednu hodnotu
        - s hodnotami: žena, muž, jiné
    8. odeslat (typ `submit`)
        - bez labelu
        - hodnota **odeslat**
6. každou skupinu (`label` + `input`, resp. více labelů a inputů u typů `checkbox` a `radio`) obalte do divu `.form-group`
7. všechny inputy a labely typu `checkbox` obalte do divu `.type-checkbox` (tj. každý `input` a `label` patřící k sobě, struktura viz `<div class="type-checkbox"><label></label><input></input></div>`)
8. všechny inputy a labely typu `radio` obalte do divu `.type-radio` (každý `input` a `label` patřící k sobě, podobně jako předchozí bod)
9. ke všem divům s třídou `.form-group` (kromě těch, ve kterých se nachází divy s třídami `.type-radio` a `.type-checkbox` a divu, kde se nachází input typu `submit`) přidejte třídu `.form-group-text` (tj. `div` bude mít dvě třídy - `.form-group` a `.form-group-text`)

## CSS
1. vytvořte soubor `style.css` ve stejné složce jako je soubor `index.html`
2. připojte soubor `style.css` do souboru `index.html` pomocí tagu `link` (`<link href="style.css" rel="stylesheet" type="text/css" />`)
3. nastavte `margin` a `padding` na hodnotu 0 pro všechny elementy na stránce (selektor `*{ css }`)
4. elementu `body` nastavte bezpatkové písmo, velikost písma `16px` a vnitřní odsazení na `30px` 
5. elementu `.container` nastavte maximální šířku `max-width` na hodnotu `750px`, vycentrujte jej na stránce (`margin`) a nastavte barvu pozadí na hodnotu `#ccc`
6. elementu `.container` nastavte vnitřní odsazení na `20px`
7. nadpis první úrovně vycentrujte, nastavte velikost písma na `30px` a spodní odsazení na `15px`
8. nadpisům druhé úrovně nastavte velikost písma na `20px` a spodní odsazení `10px`
9. elementům `.form-group` nastavte spodní odsazení na `20px`
10. elementy `label` zobrazte jako blok (vlastnost `display`)
11. elementy `label` uvnitř divů `.type-radio` a `.type-checkbox` zobrazte na jednom řádku s inputem (vlastnost `display`)
12. stylování inputů
    - všem inputům a elementu `textarea` **uvnitř** divu `.form-group-text` nastavte následující vlastnosti:
        - šířku `100%`
        - ohraničení: `1px`, barva `#666`, jednoduchá čára
        - výška `30px`
        - vnitřní odsazení: nahoře `0`, dole `0`, vlevo `10px`, vpravo `10px`
        - vlastnost `box-sizing` na hodnotu `border-box`
    - inputu typu submit - `input[type="submit"]` - nastavte:
        - šířku na `250px`
        - žádný rámeček
        - zobrazte jako blok (vlastnost `display`)
        - vnější odsazení: vpravo a vlevo - automaticky - vycentrovat, nahoře a dole `10px`
        - výška `30px`
        - pozadí černé
        - barva písma bílá
13. divům s třídou `.type-checkbox` a `.type-radio` nastavte spodní odsazení na `10px`
