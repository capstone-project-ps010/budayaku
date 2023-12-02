function search() {
    var searchTerm = document.getElementById("search-input").value.toLowerCase();
    var pages = {
        'jawa': './views/pulau-jawa.html',
        'sumatera': './views/pulau-sumatera.html',
        'papua': './views/pulau-papua.html',
        'sulawesi': './views/pulau-sulawesi.html',
        'kalimantan': './views/pulau-kalimantan.html'
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
