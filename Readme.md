## Griglia
Struttura:

    .grid .row .cell {}
    // Tutto lo spazio disponibile
    .grid .row .cell-1 {}
    // Il numero indica quante colonne deve occupare
    .grid .row .cell-2 {}
    .grid .row .cell-3 {}
    .grid .row .cell-4 {}
    .grid .row .cell-5 {}
    .grid .row .cell-6 {}
    .grid .row .cell-7 {}
    .grid .row .cell-8 {}
    .grid .row .cell-9 {}
    .grid .row .cell-10 {}
    .grid .row .cell-11 {}
    .grid .row .cell-12 {}

Intestazione:

    // Per indicare che una riga rappresenta l'intestazione, aggiungere la classe .header alla .row
    <div  class="row header">
	    <div  class="cell cell-1">Nome colonna</div>
	    <div  class="cell cell-1">Nome colonna</div>
	    <div  class="cell cell-1">Nome colonna</div>
	    <div  class="cell cell-1">Nome colonna</div>
    </div>
    <div class="row">...</div>
    <div class="row">...</div>

Per creare una nuova griglia usare l'alberatura:

    <div class="grid">
	    <div class="row header">...</div> // Opzionale
	    <div class="row">
		    <div class="cell cell-1"></div>
		    <div class="cell cell-1"></div>
		    <div class="cell cell-1"></div>
		    <div class="cell cell-1"></div>
	    </div>
	    <div class="row">...</div>
	    <div class="row">...</div>
    </div>
Per aggiungere più righe in una cella:

    <div class="row">
	    <div class="cell cell-1"></div>
	    <div class="cell cell-3">
		    // Una riga divisa a metà con celle che si adattano
		    <div class="row">
			    <div class="cell">Cella sx</div>
			    <div class="cell">Cella dx</div>
			</div>
			// Una riga intera
			<label>Etichetta</label>
			// Una riga divisa in tre parti fisse
			<div class="row">
				<div class="cell-4">Un terzo</div>
				<div class="cell-4">Un terzo</div>
				<div class="cell-4">Un terzo</div>
			</div>
	    </div>
	    <div class="cell cell-1"></div>
	    <div class="cell cell-1"></div>
    </div>
Per inserire una cella vuota (offset)

    <div class="row">
	    <div class="cell cell-offset cell-4">Cella vuota con dimensioni</div>
	    ...
    </div>

Allineamento

	// Aggiungere la classe align-center per allineare al centro le celle
	<div class="row align-center|bottom">
		<div class="cell">Cella</div>
	    ...
	</div>

## Colori e bordi
E' possibile utilizzare 5 schemi di colori (se ne possono aggiungere altri):

 - Rosso
 - Blu
 - Verde
 - Giallo
 - Arancione
 - Bianco
 - Nero
 - Grigio

Utilizzo:

	// Colori: (red, blue, green, orange, yellow, white, black, grey)
	// Bordi
    .border
    .no-border
    .border-(colore)
    .border-(colore).border-(dark|light)
    // Background
    .bg-(colore)
    .bg-(colore).bg-(dark|light)
    // Testo
    .(colore)
    .(colore) .(colore).(dark|light)
     
     // Es
     <div class="cell bg-red">Cella con sfondo rosso</div>
     ------------------
     <div class="cell bg-green bg-dark">
	     <p class="white">Testo bianco su sfondo nero</p>
     </div>
     -----------------
     // Righe alternate
     <div class="row bg-grey bg-light">Riga con sfondo grigio</div>
     <div class="row">Riga senza sfondo</div>
     <div class="row bg-grey bg-light">Riga con sfondo grigio</div>
     
## Typo
Allineamento del testo

    .aleft{} 	// text-align: left
    .acenter{}  // text-align: center
    .aright{}   // text-align: right
Dimensioni

    .xs{}
    .sm{}
    .md{}
    .lg{}
    .xl{}
    .titolo{}
    .titolo.xs{}
    .titolo.sm{}
    .titolo.md{}
    .titolo.lg{}
    .titolo.xl{}
## Pulsanti
Per aggiungere un pulsante:

    <a|div|button class="button">Pulsante</a|div|button>
    .button.inline{} // Pulsante inline (di default è un blocco)
    .button.round{}  // Pulsante rotondo
    .button.(colore) // Colore del pulsante
    .button.(colore).(dark|light) // Colore del pulsante
    .button.no-border // Pulsante senza bordi
## Breadcrumb
Per utilizzare la breadcrumb:

    <div class="breadcrumb">
	    <a class="item" href="#">Home</a>
	    <a class="item" href="#">Link normale</a>
	    <a class="item green dark" href="#">Link verde scuro</a> // Anche la breadcrumb può utilizzare le classi dei colori ovviamente
	    <a class="item active" href="#">Current page</div>
    </div>
## Menù
Per aggiungere un menù:

    <div  class="menu">
	    <div  class="item">
		    <a  href="#">Home</a>
	    </div>
	    <div  class="item">
		    <a  href="#">Link</a>
	    </div>
	    <div  class="item active">
		    <a  href="#">Gruppo 1</a>
		    <div  class="subitem">
			    <div  class="item">
				    <a  href="#">Sottoelemento 1</a>
			    </div>
			    <div  class="item">
				    <a  href="#">Sottoelemento 2</a>
			    </div>
			    <div  class="item">
				    <a  href="#">Sottogruppo 1</a>
				    <div  class="subitem">
					    <div  class="item">
						    <a  href="#">Sottosottoelemento 1</a>
					    </div>
					    <div  class="item">
						    <a  href="#">Sottosottoelemento 2</a>
					    </div>
					    <div  class="item">
						    <a  href="#">Sottosottoelemento 3</a>
					    </div>
				    </div>
			    </div>
		    </div>
	    </div>
    </div>
Non c'è un limite ai sottogruppi che è possibile creare.