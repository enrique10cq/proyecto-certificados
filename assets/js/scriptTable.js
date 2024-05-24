let table = new DataTable('#table_certificados',{
    layout:{
        topStart: 'search',
        topEnd: 'pageLength',

        topEnd: {
            pageLength:{
                menu:[5,10,25,50,100]
            }
        },
        bottomEnd:{
            paging:{
                numbers: 5
            }
        }
    },
    language: {
        url: "https://cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json",
    },
    pageLength: 5
});