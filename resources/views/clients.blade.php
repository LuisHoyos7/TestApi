@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Clients') }}</div>

                <div class="card-body">
                    <p>Clients</p>
                    @foreach ($clients as $client)
                    <div class="py-3 text-dark">
                        <h2>{{$client->name}}</h2>
                        <h3>Client id: {{$client->id}}</h3>
                        <p>Client redirect: {{$client->redirect}} </p>
                        <p>Client secret {{$client->secret}} </p>
                    </div>
                    @endforeach
                </div>

                <div class="card-body">
                    <form action="/oauth/clients" method="POST">
                        <div class="form-group">
                            <label for="name">Email</label>
                            <input class="form-control" type="text" name="name" placeholder="Client Name">
                        </div>
                        <div class="form-group pt-3">
                            <label for="redirect">Redirect</label>
                            <input class="form-control" type="text" name="redirect" placeholder="Redirect">
                        </div>
                        <div class="form-group pt-3">
                            @csrf
                            <input class="btn btn-primary" type="submit" value="Send">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
