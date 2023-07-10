@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                    {{-- button to show something --}}
                    <a target="_blank" href="https://www.youtube.com/" class="btn btn-primary">Show</a>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit ducimus hic quam consequuntur modi, quas a consectetur quae, minima nobis veritatis esse fuga magni doloribus facere id voluptatibus nemo adipisci?</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
