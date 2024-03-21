@extends ('layouts\app')

@section('content')
    <p> {{ $groceries }} </p>
    <p> {{ $groceries[0] }} </p>
    <p> {{ $groceries[0]->name }} </p>

    <?php
    $url = route('groceries.index'); ?>
    <p> {{ $url }} </p>

    @foreach ($groceries as $grocery)
        <p> {{ $grocery->name }} </p>
    @endforeach
        

        <table id="table">
            <tr>
                <th scope="col">Product</th>
                <th scope="col">Prijs</th>
                <th scope="col">Aantal</th>
                <th scope="col">Subtotaal</th>  
                <th scope="col"></th> 
                <th scope="col"></th> 
            </tr>

            @foreach ($groceries as $grocery)
            <tr>
                <td> {{ $grocery->name }} </td>
                <td> {{ $grocery->price }} </td>
                <td> {{ $grocery->number }} </td>
                <td> {{ $grocery->price * $grocery->number }} </td>
                <td> <a href="/groceries/{{ $grocery->id }}/edit">edit</a> </td>

                <td>
                    <form method = "POST" action="/groceries/{{ $grocery->id }}">
                        @csrf
                        @method('DELETE')
                        <section>
                            <button type="submit">Delete</button>
                        </section>
                    </form>
                </td>

            </tr>
            @endforeach

            <?php $arr_toadd = [];
            foreach($groceries as $grocery){
            array_push($arr_toadd, $grocery['price'] * $grocery['number']);
            } ?>

            <tfoot>
                <td>Totaal</td>
                <td></td>
                <td></td>
                <td><?= array_sum($arr_toadd) ?></td>
                <td></td>
                <td></td>
            </tfoot>

        </table>
@endsection


