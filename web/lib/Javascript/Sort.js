/**
 * Created by lilikovac on 17.11.16.
 */

( function () {

    "use strict";

    var tableSort = function (tab) {
        var titel = tab.getElementsByTagName("thead")[0].getElementsByTagName("tr")[0].getElementsByTagName("th");
        // in titel werden alle Elemente in th gespeichert
        var tbdy = tab.getElementsByTagName("tbody")[0];

        var tz = tbdy.rows;
        var nzeilen = tz.length;

        if (nzeilen == 0)
            return;
        var nspalten = tz[0].cells.length;

        var arr = new Array(nzeilen);

        var sortiert = -1;

        //erstellt Buttons mit onclick in var b
        var initTableHead = function (sp) {
            var b = document.createElement("button");
            b.type = "button";
            b.className = "btn btn-secondary";
            b.innerHTML = titel[sp].innerHTML;

            b.addEventListener("click", function () { tsort(sp); },false);
            titel[sp].innerHTML = "";
            titel[sp].appendChild(b);
        }

        //auslesen Tabellenfelder
        var getData = function (ele) {
            return ele.innerHTML;
        }


        var vglFkt_s = function (a, b) {
            var as = a[sortiert], bs = b[sortiert];
            if (as > bs) return 1;
            else return -1;
        }

        var tsort = function (sp) {
            if (sp == sortiert) arr.reverse(); // Tabelle ist schon nach dieser Spalte sortiert, also nur Reihenfolge umdrehen
            else { // Sortieren
                sortiert = sp;
                arr.sort(vglFkt_s);
            }
            for (var z = 0; z < nzeilen; z++) tbdy.appendChild(arr[z][nspalten]); // Sortierte Daten zurückschreiben
        } // tsort

        // Kopfzeile vorbereiten, iteriert über jede th und erstellt dabei einen Button, methodenaufruf initTableHead
        for (var i = 0; i < titel.length; i++) initTableHead(i) ;


        // Tabelleninhalt in ein Array kopieren
        for (var z = 0; z < nzeilen; z++) {

            var zelle = tz[z].getElementsByTagName("td"); // inhalteinerzelle
            arr[z] = new Array(nspalten +1);

            arr[z][nspalten] = tz[z];

            for (var s = 0; s < nspalten; s++) {
                //aufruf von Funktion getData, gibt werit der spalte eas
                var zi = getData(zelle[s]);
                arr[z][s] = zi ;
            }
        }

    } // tableSort


    var initTableSort = function () {
        //Listet komplette tabelle in sort_Table
        var sort_Table = document.querySelectorAll("table.sortierbar");
        //object wird erstellt
        for (var i = 0; i < sort_Table.length;i++) {
            new tableSort(sort_Table[i]);
            document.write(tableSort(sort_Table(i)))


        }
    }

    window.addEventListener("DOMContentLoaded", initTableSort, false);

})();

