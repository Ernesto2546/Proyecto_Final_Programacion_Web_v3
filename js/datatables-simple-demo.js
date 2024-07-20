window.addEventListener('DOMContentLoaded', event => {
    // Simple-DataTables
    // https://github.com/fiduswriter/Simple-DataTables/wiki

    const datatablesSimple = document.getElementById('datatablesSimple');
    if (datatablesSimple) {
        new simpleDatatables.DataTable(datatablesSimple, {
            labels: {
                placeholder: "Buscar",
                searchTitle: "Buscar en la tabla",
                pageTitle: "Página {page}",
                perPage: "Registros por página",
                noRows: "No hay resultados",
                info: "Mostrando {start} a {end} de {rows} registros",
                noResults: "No se encontraron resultados para la búsqueda",
            }
        });
    }
});
