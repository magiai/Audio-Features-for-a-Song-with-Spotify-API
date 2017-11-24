jQuery(document).ready(function () {


    var token = "BQDLLC7OKJr9j9LJkY_9eTzuETvcZO0YnoJ2uWuaFvw2mIvA3GyEgueV3-n_otS2aJHWYsLttunw1ma6to7zMhAAEl3V-dUal_t2l-tzNDcL7CGHwAsIa5J-atXo8EajGPjGINMnHt6O0ywDOOyIMVnd-I8";


    function addArtist(artists) {

        var uri = encodeURI(artists);
        var uri = encodeURIComponent(artists).replace(/%20/g, '+');
        var url = 'https://api.spotify.com/v1/search?q=' + uri + '&type=track&limit=1';


        jQuery.ajax({

            headers: {"Authorization": "Bearer " + token},

            url: url,
            type: 'GET'

        }).done(function (r) {

            console.log(r);
            console.log(r.tracks.items[0].artists[0].name);
            console.log(r.tracks.items[0].name);


            div = jQuery(".artistName");
            div = jQuery(".albumName");
            div = jQuery(".basicInfo");

            div.empty();



            var p = jQuery('<p>');
            p.text("Artist: " + r.tracks.items[0].artists[0].name);
            div.append(p);

            var p = jQuery('<p>');
            p.text("Album: " + r.tracks.items[0].name);
            div.append(p);




            jQuery.ajax({

                headers: {"Authorization": "Bearer " + token},

                url: url,
                type: 'GET',


            }).done(function (r) {

                console.log(r);

                console.log(r.tracks.items[0].id);

                var idUrl = r.tracks.items[0].id;

                var uri = encodeURI(idUrl);
                var uri = encodeURIComponent(idUrl).replace(/%20/g, '+');
                var url = 'https://api.spotify.com/v1/audio-features/' + uri + '';
                var div = jQuery(".analyze");

                div.empty();


                jQuery.ajax({

                    headers: {"Authorization": "Bearer " + token},

                    url: url,
                    type: 'GET'


                }).done(function (r) {

                    console.log(r);

                    var p = jQuery('<p class = "danceability">');
                    p.text('Danceability: ' + r.danceability);
                    div.append(p);

                    var p = jQuery('<p class = "valence">');
                    p.text('Valence: ' + r.valence);
                    div.append(p);

                    var p = jQuery('<p class = "energy">');
                    p.text('Energy: ' + r.energy);
                    div.append(p);

                    var p = jQuery('<p class = "tempo">');
                    p.text('Tempo: ' + r.tempo);
                    div.append(p);

                    var p = jQuery('<p class = "time_signature">');
                    p.text('Signature: ' + r.time_signature);
                    div.append(p);

                    var p = jQuery('<p class = "mode">');
                    p.text('Mode: ' + r.mode);
                    div.append(p);

                    var p = jQuery('<p class = "key">');
                    p.text('Key: ' + r.key);
                    div.append(p);

                    var p = jQuery('<p class = "loudness">');
                    p.text('Loudness: ' + r.loudness);
                    div.append(p);

                    var p = jQuery('<p class="acousticness">');
                    p.text('Acousticness: ' + r.acousticness);
                    div.append(p);

                    var p = jQuery('<p class="speechiness">');
                    p.text('Speechiness: ' + r.speechiness);
                    div.append(p);

                    var p = jQuery('<p class="instrumentalness">');
                    p.text('Instrumentalness: ' + r.instrumentalness);
                    div.append(p);

                    var p = jQuery('<p class="liveness">');
                    p.text('Liveness: ' + r.liveness);
                    div.append(p);

                    var p = jQuery('<p class = "duration_ms">');
                    p.text('Duration in sec: ' + r.duration_ms / 100);
                    // <?php
                    //     $duration = r.duration_ms / 600?;
                    //     implode(':', $duration);
                    // >
                    div.append(p);


                })
            })


        });

    }

    jQuery('form').on("submit", function (e) {


        e.preventDefault();

        var artists = jQuery(".get_artist").val();

        addArtist(artists);


    });
});












