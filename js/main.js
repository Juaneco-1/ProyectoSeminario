const API_KEY = 'c671ffe'

function add(movieId) {
  alert(`Debo agregar la pelicula ${movieID}`)
}

// Busque el elemeto con id #form
// Escuche cuando el form haga sumbit
$('#form').submit(e => {
  // Este metodo se ejecuta cuando el form hace sumbit
  e.preventDefault()
  // Obtenga la pelicula que digito el usuario
  let movie = document.getElementById('movie').value
  // Consuma la API
  fetch(`http://www.omdbapi.com/?apikey=${API_KEY}&s=${movie}`)
    // Cuando termina fetch 
    .then(res => res.json())
    // Cuando termina de enbellecer los datos
    .then(data => {
      /*
        data = {
          Search: [{..}, {..}, ...],
          totalResults: #,
          Response: true | false
        }
      */
      // Obtenga el objeto con id res
      let cardsContainer = $('#res')
      // Recorrer las peliculas
      data.Search.map(movie => {
        // Agregue las peliculas en HTML
        cardsContainer.append(`
          <div class='col-3 card my-2'>
            <div class='card-header'>
              <h2>${movie.Title}</h2>
            </div>
            <img src='${movie.Poster}' alt='Poster'/>
            <div class='card-body'>
              ${movie.Year}
            </div>
            <div class='card-footer'>
              <a class='btn btn-info' href='add.php/?${movie.imdbID}'>Alquilar 💵</a>
            </div>
          </div>
        `)
      })
    })
})
