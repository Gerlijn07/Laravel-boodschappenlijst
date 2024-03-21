<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Formulier </h1>
        <form method = "POST" action="/groceries/{{ $grocery->id }}">
            @csrf
            @method('PATCH')
            <section> 
                <label> Naam </label>
                <input name="name" type="text" value="{{ $grocery->name }}">
            </section>
            <section>
                <label> Aantal </label>
                <input name="number" type="number" value="{{ $grocery->number }}">
            </section>
            <section>
                <label> Prijs </label>
                <input name="price" type="number" min="0" step="0.01" value="{{ $grocery->price }}">
            </section>
            <section class="submission">
                <button type="submit">Update</button>
            </section>
        </form>
</body>
</html>