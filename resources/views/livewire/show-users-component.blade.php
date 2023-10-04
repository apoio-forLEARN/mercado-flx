<div>
    @include('components.form.user')
    <hr/>
    <table class="table-auto">
        <thead>
            <th>Nome</th>
            <th>Email</th>
            <th>Contacto</th>
            <th>Data nascimento</th>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>{{ $user->birthday }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
