
<div class="card mb-3">
    <img src="https://image.freepik.com/free-vector/communication-multiple-languages_52683-30051.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Lista ucenika skole stranih jezika</h5>
        <p class="card-text">Sve informacije o ucenicima mozete naci ovde:</p>

        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">JMBG</th>
                <th scope="col">Ime</th>
                <th scope="col">Prezime</th>
                <th scope="col">Uzrast</th>
                <th scope="col">Jezik</th>
                <th scope="col">Operacije</th>

            </tr>
            </thead>
            <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->cne }}</td>
                    <td>{{ $student->firstName }}</td>
                    <td>{{ $student->secondName }}</td>
                    <td>{{ $student->age }}</td>
                    <td>{{ $student->speciality }}</td>
                    <td>

                        <a href="{{ url('/edit/'.$student->id) }}" class="btn btn-sm btn-warning">Izmeni</a>

                    </td>


                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>






