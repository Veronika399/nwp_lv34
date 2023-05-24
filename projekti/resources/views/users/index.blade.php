@extends('layouts.app')
@section('content')
    <div class="wrapper grid">
        <div id="profile">
            <h2>Profile info: </h2>
            <p><b> name: </b>{{ $user->name }}</p>
            <p><b> email:</b> {{ $user->email }}</p>
        </div>
        <div id="projects">
            @if (!empty($projects))
                <h2>Member in: </h2>

                @foreach ($projects as $project)
                    <div id="singleProject">
                        <p><b>Project name:</b> {{ $project->naziv_projekta }}</p>
                        <p><b>Project description:</b> {{ $project->opis_projekta }}</p>
                        <p><b>Project cost:</b> {{ $project->cijena_projekta }}</p>
                        <p><b>Jobs done:</b> {{ $project->obavljeni_poslovi }}</p>
                        <a href="/project/{{ $project->id }}"><button>Update</button></a>
                    </div>
                @endforeach
            @endif
        </div>

        <div id="myProjects">
            @if (!empty($myProjects))
                <h2>Manager in: </h2>

                @foreach ($myProjects as $project)
                    <div id="singleProject">
                        <p><b>Project name:</b> {{ $project->naziv_projekta }}</p>
                        <p><b>Project description:</b> {{ $project->opis_projekta }}</p>
                        <p><b>Project cost:</b> {{ $project->cijena_projekta }}</p>
                        <p><b>Jobs done:</b> {{ $project->obavljeni_poslovi }}</p>
                        <a href="/project/{{ $project->id }}"><button>Update</button></a>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection
