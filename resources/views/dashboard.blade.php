<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container">
                        <div class="row">
                            <form action="add" method="POST">
                                @csrf
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
                                <input type="number" name="honap" id="honap"><br>
                                <label>Megjegyzés:</label><br><br>
                                <input type="text" name="megjegyzes" id="megjegyzes" placeholder="Megjegyzés"><br>
                                <button type="submit" name="send">Küldés</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
