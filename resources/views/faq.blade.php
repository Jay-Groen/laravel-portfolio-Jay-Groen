@extends('layout')

@section('content')
    <div class="questions">
        <h1> Frequently Asked Questions </h1>
        <ul>
            <li>Hoe print je een document vanaf je laptop op HZ?<span id="dots">...</span>
                <span id="more">
                    <ol>
                        <li> Ga naar de website <a href="https://print.hz.nl/login.cfm?dest=index.cfm&">
                                print.hz.nl</a>.
                        </li>
                        <li>Vul je HZ gebruikersnaam en wachtwoord in.</li>
                        <li>Klik op volgende. Als je meer documenten toe wil voegen herhaal je de vorige stap.</li>
                        <li>Wacht tot het document verwerkt is en klik op the geavanceerd knop om aan te geven of je
                            enkelzijdig of dubbelzijdig wil printen en of je in kleur of in zwart-wit wil printen.</li>
                        <li>Selecteer de HZ printer die je wil gebruiken om te printen.</li>
                    </ol>
                </span>
            </li>
            <button onclick="myFunction()" id="myBtn">Read more</button>
            <br>
            <br>
            <br>
            <li>Hoe scan je een document en stuur je het naar je eigen laptop?<span id="dots2">...</span>
                <span id="more2">
                    <ol>
                        <li>Zorg ervoor dat je ten minste 0,07 euro op je acount heb staan ook al is inscannen gratis.</li>
                        <li>Registreer door middel van je HZ pass op de RFID kaart lezer naast de printer. </li>
                        <li>Op het printer scherm klik je op de optie scan.</li>
                        <li>Leg het originele papier op het inscan scherm.</li>
                        <li>klik op scan en verstuur.</li>
                        <li>klik op scan naar mij.</li>
                        <li>Klik op ja.</li>
                        <li>klik op de start knop.</li>
                        <li>Druk op de groene knop op de printer en scan de pagina's een voor een. Als dat gedaan is
                            klik op versturen.</li>
                    </ol>
                </span>
            </li>
            <button onclick="myFunction2()" id="myBtn2">Read more</button>
            <br>
            <br>
            <br>
            <li>Wat moet je doen wanneer je ziek of symptonen van het corona-virus toont?<span id="dots3">...</span>
                <span id="more3">
                    <ol>
                        <li>Contacteer de docenten/helpdesk op school en blijf thuis. Volg de lessen online om geen
                        achterstand op te bouwen.</li>
                    </ol>
                </span>
            </li>
            <button onclick="myFunction3()" id="myBtn3">Read more</button>
            <br>
            <br>
            <br>
            <li>Hoe reserveer je een projectruimte?<span id="dots4">...</span>
                <span id="more4">
                    <ol>
                        <li>Ga naar deze link <a
                                href="https://hzuniversity.topdesk.net/tas/public/ssp/content/page/locationreservationplanner?from=f56d5230-ffe5-4ab7-ad47-ec9374b5ec34%22%3E">
                                hzuniversity.topdesk.net</a></li>
                        <li>Klik op "maak een reservering" om alle beschikbare kamers te zien.</li>
                        <li>Selecteer de gewenste kamer.</li>
                        <li>Vul de benodigde informatie in.</li>
                        <li>Bevestig de reservering.</li>
                    </ol>
                </span>
            </li>
            <button onclick="myFunction4()" id="myBtn4">Read more</button>
            <br>
            <br>
            <br>
            <li>Waar kan de auto worden geparkeerd bij het HZ gebouw?<span id="dots5">...</span>
                <span id="more5">
                    <ol>
                        <li>Zorg dat je een HZ studentenpas bezit en ga naar de pakeerplaats op het volgende
                            adres:<strong>
                                Poelendaelesingel, 4335 JA Middelburg</strong>. Hier kan je de HZ studentenpas tegen de
                            RDIF lezer
                            houden en dan zal de slagboom omhoog gaan zodat u kunt parkeren.</li>
                    </ol>
                </span>
            </li>
            <button onclick="myFunction5()" id="myBtn5">Read more</button>
        </ul>
        <ul>
            @foreach($faqs as $faq)
                <li>{{ $faq -> question }}</li>
            @endforeach
        </ul>
    </div>
@endsection
