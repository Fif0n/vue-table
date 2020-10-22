window.app = new Vue({
    el: "#app",
    data: {
      filter: '',
      items: [],
      categories: [],
      fields:
        [
          {
            key: 'kategorie',
            label: "Kategorie",
            sortable: true
          },
          {
            key: 'nr_kursu',
            label: "Nr kursu",
            sortable: true
          },
          {
            key: 'data_rozpoczecia',
            label: "Data rozpoczęcia",
            sortable: true
          },
          {
            key: 'data_zakonczenia',
            label: "Data zakończenia",
            sortable: true
          },
          {
            key: 'miejsce_kursu',
            label: "Miejsce kursu",
            sortable: true
          },
          {
            key: 'ulica',
            label: "Ulica",
            sortable: true
          },
          {
            key: 'miejscowosc',
            label: "Miejscowość",
            sortable: true
          },
          {
            key: 'kod_pocztowy',
            label: "Kod pocztowy",
            sortable: true
          },
          {
            key: 'uwagi',
            label: "Uwagi",
            sortable: true
          },
          {
            key: 'komentarz',
            label: "Komentarz",
            sortable: true
          }
        ]
          
    },
     
     methods:{
            rowClickHandler: function(record, index) {
            //zdarzenie kliknięcia w wiersz
                    alert('wiersz:  ' + JSON.stringify(record) + '\nindex:' + index); // This will be the item data for the row
            },
            getCourses: function(){
              
            }
     },
     created(){
       axios.get('http://localhost/vue/functions/kurs_json.php', {
       })
       .then(response => {
         this.items = response.data;
       });
       axios.get('http://localhost/vue/functions/kategorie_json.php', {
       })
       .then(response => {
         this.categories = response.data;
       })
     }
  });