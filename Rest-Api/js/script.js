

//ketika function search movie jalan
function searchMovie() {
    //ketika di search,hilangkan semua data dulu di div data movie list
    $('#movie-list').html('');

    $.ajax({
        url: 'http://omdbapi.com',
        type: 'get',
        dataType: 'json',
        data: {
            'apikey':'4dd7ad00',
            's': $('#search-input').val()
            //cari berdasarkan judul
        },
        //tampil dan dapatkan data dari API
        success: function (result) {
            if (result.Response == "True") {
                let movies = result.Search;
                //lakukan pengulangan jika ada beberapa judul yang sama
                //ambil dan tampilkan data lengkap dari API
                $.each(movies, function (i, data) {
                    $('#movie-list').append(`
                        <div class="col-md-4">
                        <div class="card mb-3">
                        <img src="${data.Poster}" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">${data.Title}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">${data.Year}</h6>
                        <a href="#" class="card-link see-detail" data-toggle="modal" data-target="#exampleModal" data-id="${data.imdbID}">See Detail</a>
                        </div>
                        </div>
                        </div>
                        `);
                });
                //ketika search input di klik,lakukan pencarian data
                $('#search-input').val('');
              //jika hasil tidak ditemukan,tampilkan error
          } else {
            $('#movie-list').html(`
                <div class="col">
                <h1 class="text-center">` + result.Error + `</h1>
                </div>
                `)
        }
    }
});
}
//ketika  tombol search selesai digunakan,maka field search akan blank
$('#search-button').on('click', function () {
    searchMovie();
});
//ketika tombol enter dipencet,lakukan pencarian

$('#search-input').on('keyup', function (e) {
    //jika keycode tombol enter = 13

    if (e.which === 13) {
        searchMovie();
        //jalankan fungsi searchmovie
    }
});

//ketika movie list dijalankan,dapatkan detail data film dalam bentuk modal box
$('#movie-list').on('click', '.see-detail', function () {

    $.ajax({
        url: 'http://omdbapi.com',
        dataType: 'json',
        type: 'get',
        data: {
            'apikey':'4dd7ad00',
            'i': $(this).data('id')
            //cari film berdasarkan id(untuk menampilkan data lengkap film)
            //jika datanya valid
        },
        //muncul data data(spt tangal rilis,nama file,gambar,direktur,genre dan aktor)
        success: function (movie) {
            if (movie.Response === "True") {

                $('.modal-body').html(`
                    <div class="container-fluid">
                    <div class="row">
                    <div class="col-md-4">
                    <img src="`+ movie.Poster + `" class="img-fluid">
                    </div>
                    <div class="col-md-8">
                    <ul class="list-group">
                    <li class="list-group-item"><h3>`+ movie.Title + `</h3></li>
                    <li class="list-group-item">Released : `+ movie.Released + `</li>
                    <li class="list-group-item">Genre : `+ movie.Genre + `</li>                 
                    <li class="list-group-item">Director : `+ movie.Director + `</li>                 
                    <li class="list-group-item">Director : `+ movie.Actors + `</li>                 
                    </ul>
                    </div>
                    </div>
                    </div>
                    `);

            }
        }
    });

});
