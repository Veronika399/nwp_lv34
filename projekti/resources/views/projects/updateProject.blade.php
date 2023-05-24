@extends('layouts.app')
@section('content')
    <div class="wrapper create-project">
        <h1>Update project</h1>
        <form action="/project" method="POST" id="create_project_form">
            @csrf
            @method('PUT')
            @if ($project->voditelj_id == auth()->user()->id)
                <label for="naziv_projekta">Project name:</label>
                <input type="text" name="naziv_projekta" id="naziv_projekta" required class="formInputs"
                    value="{{ $project->naziv_projekta }}">


                <label for="opis_projekta">Description:</label>
                <textarea name="opis_projekta" id="opis_projekta" cols="30" rows="10" required
                    class="formInputs">{{ $project->opis_projekta }}</textarea>

                <label for="cijena_projekta">Cost:</label>
                <input type="number" name="cijena_projekta" id="cijena_projekta" required class="formInputs"
                    value="{{ $project->cijena_projekta }}">

                <label for="datum_pocetka">Starting date:</label>
                <input type="date" name="datum_pocetka" id="datum_pocetka" required class="formInputs"
                    value="{{ $project->datum_pocetka }}">
                <label for="datum_zavrsetka">Finish date:</label>
                <input type="date" name="datum_zavrsetka" id="datum_zavrsetka" required class="formInputs"
                    value="{{ $project->datum_zavrsetka }}">
                <input type="text" hidden name="id" value="{{ $project->id }}">
            @endif
            <label for="obavljeni_poslovi">Jobs done:</label>
            <textarea name="obavljeni_poslovi" id="obavljeni_poslovi" cols="30" rows="5" required
                class="formInputs"> {{ $project->obavljeni_poslovi }}</textarea>
            <button type="submit">Update project</button>

        </form>
    </div>
@endsection
