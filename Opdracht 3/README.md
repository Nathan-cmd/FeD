# Frontend-Opdracht-3


In de eerste fase van het ontwerp process heb ik het meeste energie gestoken in het op orde krijgen van de data. Toen eenmaal duidelijk werd wat voor JSON data er allemaal te gebruiken was kreeg ik een beter beeld van welke data er gereflecteerd kon worden. 

De meest voor de hand liggende informatie was een foto, de omschrijving en de adres gegevens. Er was ook data beschikbaar zoals coördinaten en uitgebreidere omschrijvingen.

Het meest uitdagende aan deze opdracht was het parsen van de background-image URL. Niet alle activiteiten hadden een afbeelding. Op het moment dat een attractie geen afbeelding bevatte, stopte de rest van de data met laden en werkte geen enkele afbeelding meer. Door op de juiste manier de JSON dat als string te importeren en een functie te schrijven die lege objecten opvult kon dit omzeilt worden. 

Deze moest per list item verschillen en de manier waarop JSON data import maakte het moeilijk 

------------------------------------------------------------------------

In de tweede phase ben ik aan de look & feel begonnen. Ik heb gekozen voor een "I-Amsterdam"-achtige look die met rood zwart en wit een Amsterdams gevoel geeft.

De bovenste kant van het scherm is een carousel ontwerp waarmee gebruikers door de attracties kunnen neuzen. Alle attracties met locatie naam zijn ook als lijst weergave beschikbaar. 

Dit ontwerp was wel functioneel, maar dekte de lading niet helemaal omdat de beschrijvingen nog niet toegevoegd zijn. De locatie namen staan er bij met foto's.

------------------------------------------------------------------------

![Attracties](https://thumbs.gfycat.com/MeatyDiscreteCrocodile-size_restricted.gif)


Ook het uiteindelijke ontwerp heeft de focus vooral op de techniek gelegd. Een carousel maken ging niet zo makkelijk als ik dacht. De juiste manier om dit te doen is het opmeten van de breedte van de container en dat gebruiken als data voor JS om te berekenen hoe lang de parent container moet zijn en hoeveel px er opgeshoven moet worden. Calculus is niet voor mij weggelegd ik kwam hier niet uit en heb uiteindelijk besloten via de console op te zoeken hoeveel items er waren. Ik heb vastgesteld hoe groot ik de carousel wou hebben en heb de breedte van de children-elements opgeteld zodat het Unordered List element breed genoeg zou zijn voor alle onderwerpen. 

Voor attracties die geen afbeeldingen bevatten heb ik een 'geen afbeelding' url doorgegeven via javascript. 

Het grootste probleem met dit ontwerp is wanneer gebruiker snel twee keer klikken de afbeelding niet verspringt zoals verwacht. 



