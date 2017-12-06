jQuery(document).ready(function () {


    var token = "BQDVkQ5pejF7oKMWJdCjP5-qfc4ldrpFIcA-FbGnT-9ubbqMoXe9OgzFd7Fg3plz8uPorIYtBd9MsU1AkHxbOZq1oLMs-Qs6zve_SMxMpJLg1HOmhyhpBkK8zO4fWbFTPHKVNT8lCcA3643wnw9ywX3BSrc";


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
            // console.log(r.tracks.items[0].name);


            div = jQuery(".artistName");
            div = jQuery(".albumName");
            div = jQuery(".basicInfo");

            div.empty();



            var p = jQuery('<p>');
            p.text("Artist: " + r.tracks.items[0].artists[0].name);
            div.append(p);

            // var p = jQuery('<p>');
            // p.text("Album: " + r.tracks.items[0].name);
            // div.append(p);




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

                // var div = jQuery(".danceability");
                // var div = jQuery(".valence");

                div.empty();


                jQuery.ajax({

                    headers: {"Authorization": "Bearer " + token},

                    url: url,
                    type: 'GET'


                }).done(function (r) {

                    console.log(r);

                    // var p = jQuery('<p>');
                    // p.text('Danceability: ' + r.danceability);
                    // div.append(p);
                    //
                    // var p = jQuery('<p>');
                    // p.text('Valence: ' + r.valence);
                    // div.append(p);


                    var p = jQuery('<p class = "audio danceability">');
                    p.text('Danceability: ' + r.danceability);
                    div.append(p);

                    var p = jQuery('<p class = "audio valence">');
                    p.text('Valence: ' + r.valence);
                    div.append(p);

                    var p = jQuery('<p class = "audio energy">');
                    p.text('Energy: ' + r.energy);
                    div.append(p);

                    var p = jQuery('<p class = "audio tempo">');
                    p.text('Tempo: ' + r.tempo);
                    div.append(p);

                    var p = jQuery('<p class = "audio time_signature">');
                    p.text('Signature: ' + r.time_signature);
                    div.append(p);

                    var p = jQuery('<p class = "audio mode">');
                    p.text('Mode: ' + r.mode);
                    div.append(p);

                    var p = jQuery('<p class = "audio key">');
                    p.text('Key: ' + r.key);
                    div.append(p);

                    var p = jQuery('<p class = "audio loudness">');
                    p.text('Loudness: ' + r.loudness);
                    div.append(p);

                    var p = jQuery('<p class="audio acousticness">');
                    p.text('Acousticness: ' + r.acousticness);
                    div.append(p);

                    var p = jQuery('<p class="audio speechiness">');
                    p.text('Speechiness: ' + r.speechiness);
                    div.append(p);

                    var p = jQuery('<p class="audio instrumentalness">');
                    p.text('Instrumentalness: ' + r.instrumentalness);
                    div.append(p);

                    var p = jQuery('<p class="audio liveness">');
                    p.text('Liveness: ' + r.liveness);
                    div.append(p);

                    var p = jQuery('<p class = "audio duration_ms">');
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












