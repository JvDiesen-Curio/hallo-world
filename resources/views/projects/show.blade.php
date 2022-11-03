<x-layout>
    <h1>{{ $project->naam }}</h1>

    <h6>Omschrijving:</h6>
    <p>
        {{ $project->omschrijving }}
    </p>
    <h6>categorie:</h6>
    {{ $project->categorie->naam }}


</x-layout>
