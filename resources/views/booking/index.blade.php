@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Your appointments')}}: {{$appointments->count()}}</div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">Nr</th>
                                <th scope="col">Doktor</th>
                                <th scope="col">Data</th>
                                <th scope="col">Godzina</th>
                                <th scope="col">Link do spotkania</th>
                                <th scope="col">Status</th>
                            </tr>
                            </thead>
                            <tbody>
                                @forelse($appointments as $key=>$appointment)
                                    <tr>
                                        <th scope="row">{{$key+1}}</th>
                                        <td>{{$appointment->doctor->name}}</td>
                                        <td>{{$appointment->date}}</td>
                                        <td>{{$appointment->time}}</td>
                                        <td><a class="btn btn-primary" href="/video-chat/{{$appointment->date}}/{{$appointment->doctor_id}}/{{$appointment->user_id}}" role="button" target="_blank">Dołącz</a></td>
                                        <td>
                                            @if(@$appointment->status==0)
                                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#cc0000" class="bi bi-x-square-fill" viewBox="0 0 16 16">
                                                    <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708z"/>
                                                </svg>
                                            @else
                                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="green" class="bi bi-check-square-fill" viewBox="0 0 16 16">
                                                    <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z"/>
                                                </svg>
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <td>Obecnie nie masz zaplanowanych żadnych wizyt.</td>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

