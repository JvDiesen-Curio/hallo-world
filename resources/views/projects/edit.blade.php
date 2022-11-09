<x-layout>
    <form action="" method="POST">
        @csrf
        @method('put')

        <label for="naam">Naam:</label>
        <input type="text" name="naam" id="naam" value="{{ old('naam', $project->naam) }}">
        <br>
        <label for="omschrijving">Omschrijving:</label>
        <input type="text" name="omschrijving" id="omschrijving"
            value="{{ old('omschrijving', $project->omschrijving) }}">
        <br>
        <label for="categorie">Categorie:</label>
        <select name="categorie_id" id="categorie_id">
            @foreach ($categories as $categorie)
                <option value="{{ $categorie->id }}">{{ $categorie->naam }}</option>
            @endforeach
        </select>
        <br>

        <button type="submit">Versturen</button>


    </form>


</x-layout>
