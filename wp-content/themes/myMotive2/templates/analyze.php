<div class = "analyze">

    <div class = "row">

        <div class = "col-1-5">
            <div class = "audioName">
                <p>Danceability</p>
            </div>
            <br>
            <div class = "audioFeature">
                <p class = "danceabilityDescription">
                    describes how suitable a track is for dancing based
                    on a combination of
                    musical elements including tempo, rhythm stability,
                    beat strength, and overall regularity.
                    A value of 0.0 is least danceable and 1.0 is most danceable.
                </p></div>
        </div>



        <div class = "col-1-5">
            <div class = "audioName">
                <p>Valence</p>
            </div>
            <br>
            <div class = "audioFeature">
                <p class = "valenceDescription"> a measure from 0.0 to 1.0 describing the musical positiveness
                    conveyed by a track. Tracks with high valence sound more positive
                    (e.g. happy, cheerful, euphoric), while tracks with low valence sound
                    more negative (e.g. sad, depressed, angry).</p></div>
        </div>

        <div class = "col-2-5">
            <div class = "audioName">
                <p>Energy</p>
            </div>
            <br>
            <div class = "audioFeature">
                <p class = "energyDescription">
                    is a measure from 0.0 to 1.0 and represents a perceptual
                    measure of intensity and activity. Typically, energetic tracks feel fast,
                    loud, and noisy. For example, death metal has high energy,
                    while a Bach prelude scores low on the scale.
                    Perceptual features contributing to this attribute include dynamic range,
                    perceived loudness, timbre, onset rate, and general entropy.

                </p></div>
        </div>


        <div class = "col-1-5">
            <div class = "audioName">
                <p>Tempo</p>
            </div>
            <br>
            <div class = "audioFeature">
                <p class = "tempoDescription"> - the overall estimated tempo of a track in beats per minute (BPM).
                    In musical terminology, tempo is the speed or pace of a given piece and
                    derives directly from the average beat duration.</p></div>
        </div>

    </div>

    <div class = "row">


        <div class = "col-1-5">
            <div class = "audioName">
                <p>Time signature</p>
            </div>
            <br>
            <div class = "audioFeature">
                <p class = "time_signatureDescription">
                    is an estimated overall time signature of a track. The time signature (meter)
                    is a notational convention to specify how many beats are in each bar (or measure).
                </p></div>
        </div>

        <div class = "col-1-5">
            <div class = "audioName">
                <p>Mode</p>
            </div>
            <br>
            <div class = "audioFeature">
                <p class = "modeDescription"> indicates the modality (major or minor) of a track, the type of scale from which its melodic content is derived.
                    Major is represented by 1 and minor is 0.</p></div>
        </div>

        <div class = "col-1-5">
            <div class = "searchBox">
                <form class="artist">

                    <label>
                        <input type = "text" name="artist" value = "song" class="get_artist">
                    </label>
                    <br>
                    <label>


                        <input type="submit" value = "search" class = "search_artist">
                    </label>

                </form>
            </div>
        </div>


        <div class = "col-1-5">
            <div class = "audioName">
                <p>Key</p>
            </div>
            <br>
            <div class = "audioFeature">
                <p class = "keyDescription">
                    - the key the track is in. Integers map to pitches using standard Pitch Class notation.
                    E.g. 0 = C, 1 = C♯/D♭, 2 = D, and so on.

                </p></div>
        </div>

        <div class = "col-1-5">
            <div class = "audioName">
                <p>Loudness</p>
            </div>
            <br>
            <div class = "audioFeature">
                <p class = "loudnessDescription">
                    - the overall loudness of a track in decibels (dB).
                    Loudness values are averaged across the entire track and
                    are useful for comparing relative loudness of tracks.
                    Loudness is the quality of a sound that is the primary psychological correlate of physical strength (amplitude). Values typical range between -60 and 0 db.
                </p></div>
        </div>


    </div>

    <div class = "row">

        <div class = "col-1-5">
            <div class = "audioName">
                <p>Acousticness</p>
            </div>
            <br>
            <div class = "audioFeature">
                <p class="acousticnessDescription"> is a confidence measure from 0.0 to 1.0 of whether the track
                    is acoustic. 1.0 represents high confidence the track is acoustic.</p></div>
        </div>

        <div class = "col-2-5">
            <div class = "audioName">
                <p>Speechiness</p>
            </div>
            <br>
            <div class = "audioFeature">
                <p class="speechinessDescription">
                    detects the presence of spoken words in a track.
                    The more exclusively speech-like the recording (e.g. talk show, audio book, poetry),
                    the closer to 1.0 the attribute value. Values above 0.66 describe tracks
                    that are probably made entirely of spoken words. Values between 0.33 and 0.66 describe tracks that may contain both music and speech, either in sections or layered, including such cases as rap music. Values below 0.33 most likely represent music and other non-speech-like tracks.
                </p></div>
        </div>

        <div class = "col-1-5">
            <div class = "audioName">
                <p>Instrumentalness</p>
            </div>
            <br>
            <div class = "audioFeature">
                <p class="instrumentalnessDescription"> predicts whether a track contains no vocals.
                    "Ooh" and "aah" sounds are treated as instrumental in this
                    context. Rap or spoken word tracks are clearly "vocal".
                    The closer the instrumentalness value is to 1.0, the greater
                    likelihood the track contains no vocal content. Values above 0.5 are intended to represent
                    instrumental tracks, but confidence is higher as the value approaches 1.0.</p></div>
        </div>


        <div class = "col-1-5">
            <div class = "audioName">
                <p>Liveness</p>
            </div>
            <br>
            <div class = "audioFeature">
                <p class= "livenessDescription"> detects the presence of an audience in the recording.
                    Higher liveness values represent an increased probability that the track
                    was performed live. A value above 0.8 provides strong likelihood that the track is live.</p></div>
        </div>



    </div>

</div>