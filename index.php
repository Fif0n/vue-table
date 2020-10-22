<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Tabela z filtrem i sortowaniem</title>
    <link type="text/css" rel="stylesheet" href="https://unpkg.com/bootstrap/dist/css/bootstrap.min.css"/>
    <link type="text/css" rel="stylesheet" href="https://unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.css"/>
    <script src="https://unpkg.com/vue"></script>
    <script src="https://unpkg.com/babel-polyfill@latest/dist/polyfill.min.js"></script>
      <!-- Bootstrap działa standardowo z jQuery, ta wersja biblioteki integruje BS z VUE: -->
    <script src="https://unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.js"></script>
  </head>

  <body>
    <h1>Tabela reaktywna VUE</h1>
     
    <div id="app">
      <b-container><!-- Kontener Bootstrap-->
        <b-form-group horizontal label="Filtrowanie tabeli" class="mb-0">
            <b-input-group>
                <b-form-input v-model="filter" placeholder="Czego szukasz?" />
            </b-input-group>
          </b-form-group>    
         <template>
             <b-table striped hover
                      :items="items"
                      :fields="fields"
                      :filter="filter"
                      @row-clicked="rowClickHandler"
                    >
             </b-table>
          </template>
          <b-button variant="primary" v-b-modal.add-course>Dodaj pracownika</b-button>
        <b-modal id="add-course" ref="modal" hide-footer>
             
          <b-form ref="form" action="functions/addKurs.php" method="POST">
            <b-form-group label="Kategoria:">
              <b-form-select :options="categories" name="kat" id="kat">

              </b-from-select>
            </b-form-group>
            <b-form-group label="Nr kursu:">
              <b-form-input type="number" name="nrkursu" id="nrkursu"  />
            </b-form-group>
            <b-form-group label="Data rozpoczęcia:">
              <b-form-input type="date" name="datastart" id="datastart"  />
            </b-form-group>
            <b-form-group label="Data zakończenia:">
              <b-form-input type="date" name="datakoniec" id="datakoniec"  />
            </b-form-group>
            <b-form-group label="Miejsce kursu:">
              <b-form-input type="text" name="miejsce" id="miejsce"  />
            </b-form-group>
            <b-form-group label="Ulica:">
              <b-form-input type="text" name="ul" id="ul"  />
            </b-form-group>
            <b-form-group label="Miejscowość:">
              <b-form-input type="text" name="miejscowosc" id="miejscowosc"  />
            </b-form-group>
            <b-form-group label="Kod pocztowy:">
              <b-form-input type="text" name="kod" id="kod"  />
            </b-form-group>
            <b-form-group label="Uwagi:">
              <b-form-input type="text" name="uwagi" id="uwagi"  />
            </b-form-group>
            <b-form-group label="Komentarz:">
              <b-form-input type="text" name="kom" id="kom"  />
            </b-form-group>
            
            <b-button type="submit" name="submit-course" variant="primary">Dodaj</b-button>
            
          </b-form>
        </b-modal>
        </b-container>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="script.js"></script>
    </body>
</html>