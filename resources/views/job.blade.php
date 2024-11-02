<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>

    <ul>
     <h2><strong>Role:</strong>{{$job["title"]}}</h2>
     <p>Pays salary of {{$job["salary"]}}</p>
    </ul>
</x-layout>
