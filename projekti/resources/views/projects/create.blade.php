@extends('layouts.app')
@section('content')
    <div class="wrapper create-project">
        <h1>Create new project</h1>
        {{-- form for creating new project and after pressing button, we are sending POST request wih all data --}}
        <form action="/project" method="POST" id="create_project_form">
            @csrf
            <label for="naziv_projekta">Project name:</label>
            <input type="text" name="naziv_projekta" id="naziv_projekta" required class="formInputs">


            <label for="opis_projekta">Description:</label>
            <textarea name="opis_projekta" id="opis_projekta" cols="30" rows="10" required class="formInputs"></textarea>

            <label for="cijena_projekta">Cost:</label>
            <input type="number" name="cijena_projekta" id="cijena_projekta" required class="formInputs">

            <label for="obavljeni_poslovi">Jobs done:</label>
            <textarea name="obavljeni_poslovi" id="obavljeni_poslovi" cols="30" rows="5" required class="formInputs"></textarea>

            <label for="datum_pocetka">Starting date:</label>
            <input type="date" name="datum_pocetka" id="datum_pocetka" required class="formInputs">

            <label for="datum_zavrsetka">Finish date:</label>
            <input type="date" name="datum_zavrsetka" id="datum_zavrsetka" required class="formInputs">

            <p id="selectMembersTitle">Select team members: </p>
            <fieldset id="checkboxes">
                @foreach ($users as $user)
                    <div>
                        {{ $user->name }}<input type="checkbox" name="team_members[]" value={{ $user->id }}
                            class='member_checkbox'>
                    </div>
                @endforeach
            </fieldset>
            <button type="submit">Create project</button>

        </form>
    </div>
@endsection
