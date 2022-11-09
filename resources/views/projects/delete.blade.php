<x-layout>

    <form action="" method="POST">
        @csrf
        @method('delete')
        <label>Wil je deze delete: {{ $project->naam }}</label>
        <br>
        <button type="submit">Delete</button>
    </form>
</x-layout>
