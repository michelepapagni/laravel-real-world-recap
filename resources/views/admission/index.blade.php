@extends('layouts.app')
@section('content')

<div class="admission">
    @if ($errors->any())
        <div class="container">
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

    @if (!empty($message))
        <div class="container">
            <div class="alert alert-success">
                {{ $message }}
            </div>
        </div>
    @endif


    <div class="admission_section_1">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>@lang('general.h1_admission')</h1>
                    <p>@lang('general.p_admission')</p>
                </div>
            </div>
        </div>
    </div>
    <div class="admission_section_2">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="{{ route('admission.save') }}" method="post">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                            <label for="name">Nome</label>
                            <input type="text" name="name" placeholder="Inserisci il tuo nome" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="mail">Mail</label>
                            <input type="text" name="mail" placeholder="Inserisci la tua mail" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="message">Messaggio</label>
                            <textarea placeholder="Inserisci il messaggio" name="message" class="form-control" rows="8" cols="80"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit">Invia</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
