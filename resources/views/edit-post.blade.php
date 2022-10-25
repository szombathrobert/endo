
                            <form method="post" action="{{route('update.post')}}">
                                @csrf
                                <input type="hidden" name="id" value="{{$post->id}}">
                                <label>Egészségesnek érzi magát?</label><br><br>
                                <input type="checkbox" name="check1" value="Igen">Igen<br>
                                <input type="checkbox" name="check1" value="Nem">Nem<br><br>
                                <label>Szűrő vizsgálatra érkezett?</label><br><br>
                                <input type="checkbox" name="check2" value="Igen">Igen<br>
                                <input type="checkbox" name="check2" value="Nem">Nem<br><br>
                                <label>Hasi fájdalmai vannak?</label><br><br>
                                <input type="checkbox" name="check3" value="Igen">Igen<br>
                                <input type="checkbox" name="check3" value="Nem">Nem<br><br>
                                <label>Székletében szokott-e vért látni?</label><br><br>
                                <input type="checkbox" name="check4" value="Igen">Igen<br>
                                <input type="checkbox" name="check4" value="Nem">Nem<br><br>
                                <label>Hány hónapja van panasza?</label><br><br>
                                <input type="number" name="honap" id="honap" value="{{$post->honap}}"><br>
                                <label>Megjegyzés:</label><br><br>
                                <input type="text" name="megjegyzes" id="megjegyzes" placeholder="Megjegyzés" value="{{$post->megjegyzes}}"><br>
                                <button type="submit" name="send">Küldés</button>
                            </form>
