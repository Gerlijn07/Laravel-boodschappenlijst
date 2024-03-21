<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Formulier </h1>
        <form method = "POST" action="/groceries">
            @csrf
            <section> 
                <label> Naam </label>
                <input name="name" type="text"></input>
            </section>
            <section>
                <label> Aantal </label>
                <input name="number" type="number"></input>
            </section>
            <section>
                <label> Prijs </label>
                <input name="price" type="number" min="0" step="0.01"></input>
            </section>
            <section class="submission">
                <input type="submit" value="Submit"></input>
            </section>
        </form>
</body>
</html>



                