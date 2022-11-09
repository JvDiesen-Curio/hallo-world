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

                <a style="margin-left: 1rem" href="/projects/edit/{{ $project->id }}">Edit</a>
                <a style="margin-left: 1rem" href="/project/delete/{{ $project->id }}">Delete</a>
            </li>
        @endforeach
    </ul>
</x-layout>
