@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }} --}}

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <td>Name</td>
                                    <td>Email</td>
                                    <td>Actions</td>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($quotes as $quote)
                                    <tr>
                                        <td>{{ $quote->first_name }}</td>
                                        <td>{{ $quote->email }}</td>
                                        <td>
                                            <a href="{{route('quote.show', $quote->code)}}" class="btn btn-primary">Show</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3" align="center">
                                            No records
                                        </td>
                                    </tr>
                                @endforelse

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
