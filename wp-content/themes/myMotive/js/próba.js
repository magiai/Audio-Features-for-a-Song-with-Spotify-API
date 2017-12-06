div = jQuery(".artistName");
div = jQuery(".albumName");
div = jQuery(".basicInfo");

var p = jQuery('<p>');
p.text("Artist: " + r.tracks.items[0].artists[0].name);
div.append(p);

var p = jQuery('<p>');
p.text("Album: " + r.tracks.items[0].name);
div.append(p);

div.empty();

var div = jQuery(".danceability");

var p = jQuery('<p>');
p.text('Danceability: ' + r.danceability);
div.append(p);

var div = jQuery(".valence");

var p = jQuery('<p>');
p.text('Valence: ' + r.valence);
div.append(p);