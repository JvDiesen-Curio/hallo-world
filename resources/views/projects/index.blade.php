<x-layout>
    <H1>Projects:</H1>
    <ul>
        @foreach ($projects as $project)
            <li>
                <a href="/project/{{ $project->id }}">
                    Naam:
                    {{ $project->naam }}
                    Categorie:
                    {{ $project->categorie->naam }}
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
