@extends('layouts.app')

@section('template_title')
    {{ $bank->name ?? __('Show') . " " . __('Bank') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Bank</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('banks.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Name:</strong>
                                    {{ $bank->name }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Address:</strong>
                                    {{ $bank->address }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tel:</strong>
                                    {{ $bank->tel }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
