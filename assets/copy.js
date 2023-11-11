function copyToClipboardDomain() {
    var textToCopy = "play.ifheroes.de:25565"; /// Domain

    var tempInput = document.createElement("input"); /// erstelle variable mit wert
    tempInput.value = textToCopy; /// in ablage speichern
    document.body.appendChild(tempInput); 

    tempInput.select(); //// markieren des textes in der shadow box
    document.execCommand("copy");

    document.body.removeChild(tempInput); /// entfernen des temp textfelds

    alert("Adresse erfolgreich kopiert!"); /// benachrichtigung 
}