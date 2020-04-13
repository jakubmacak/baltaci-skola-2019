# restaurace
- id
- nazev
- adresa
- popis
- telefon
- web (muze byt null)

# jidlo
- id
- nazev
- cena
- je_polevka
- menu_id - cizí klíč do tabulky menu

# menu
- id
- datum
- restaurace_id - cizí klíč do tabulky restaurace
