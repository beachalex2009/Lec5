@extends('layout.master');

<div class="table-responsive">
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Jan</th>
                <th scope="col">Feb</th>
                <th scope="col">March</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($agents as $name => $targets)
                <tr class="">
                    <td scope="row">{{ $loop->iteration }}</td>
                    <td>{{ $name }}</td>
            
            @foreach ($targets as $month => $amount)
                <td>{{ $amount }}</td>
            @endforeach
            @endforeach
            
            </tr>
        </tbody>
    </table>
</div>
