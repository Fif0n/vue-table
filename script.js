window.app = new Vue({
    el: "#app",
    data: {
      filter: '',
      items: [],
      fields:
        [
         {
            key: "active", //kolumna z JSON
            sortable: false, //czy włączyć sortowanie dla tej kolumny
            label: "Aktywny" //Nagłówek tabeli
        },
        {
            key: "age",
            sortable: true,
            label: "Wiek"
        },
        {
            key: "name",
            sortable: true,
            label: "Imię"
        },
        {
            key: "last_name",
            sortable: true,
            label: "Nazwisko"
        }
           
        ]
    },
     
     methods:{
            rowClickHandler: function(record, index) {
            //zdarzenie kliknięcia w wiersz
                    alert('wiersz:  ' + JSON.stringify(record) + '\nindex:' + index); // This will be the item data for the row
            },
            addEmployee: function(){
              
            }
     },
     created(){
       axios.get('http://localhost/vue/functions/jsonEncode.php', {
       })
       .then(response => {
         this.items = response.data;
       })
     }
  });