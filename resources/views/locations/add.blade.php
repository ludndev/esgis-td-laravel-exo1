<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Location</title>
</head>
<body>
    <h1>Add a Location</h1>
    <form action="{{ route('locations.store') }}" method="POST">
        @csrf

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <br><br>

        <label for="nom_prenom">Nom & Prénom:</label>
        <input type="text" id="nom_prenom" name="nom_prenom" required>

        <br><br>

        <label for="addresse">Adresse:</label>
        <input type="text" id="addresse" name="addresse" required>

        <br><br>

        <label for="vehicule">Select Vehicule:</label>
        <select id="vehicule" name="vehicule_id" required>
            @foreach($vehicules as $vehicule)
                <option value="{{ $vehicule->id }}">{{ $vehicule->nom }}</option>
            @endforeach
        </select>

        <br><br>

        <label for="date_retour">Date retour:</label>
        <input type="date" id="date_retour" name="date_retour" required>

        <br><br>

        <button type="submit">Add Location</button>
    </form>
</body>
</html>
