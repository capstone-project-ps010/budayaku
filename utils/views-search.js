function search() {
    var searchTerm = document.getElementById("search-input").value.toLowerCase();
    var pages = {
        'jawa': './pulau-jawa.html',
        'sumatera': './pulau-sumatera.html',
        'papua': './pulau-papua.html',
        'sulawesi': './pulau-sulawesi.html',
        'kalimantan': './pulau-kalimantan.html'
    };

    if (pages.hasOwnProperty(searchTerm)) {
        window.location.href = pages[searchTerm];
    } else {
        alert("Pulau tidak ditemukan.");
    }
}

document.getElementById("search-input").addEventListener("keyup", function (event) {
    if (event.key === "Enter") {
        event.preventDefault();
        search();
    }
});

document.getElementById("search-form").addEventListener("submit", function (event) {
    event.preventDefault();
    search();
});
