<x-layout>
    <H1>Projects:</H1>
    <ul>
        @foreach ($projects as $project)
            <li>{{ $project->naam }} </li>
        @endforeach
    </ul>
</x-layout>
