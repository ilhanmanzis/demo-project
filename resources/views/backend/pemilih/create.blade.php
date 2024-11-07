@extends('layouts.backend.app')
@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h4 class="card-title"> {{ __('button.add') }} Pemilih</h4>
            <div class="card-header-action">
                <a href="{{ route('backend.pemilih.index') }}" class="btn btn-secondary">{{ __('button.back') }}</a>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('backend.pemilih.store') }}" method="post">
                @csrf
                <input type="hidden" name="kelas_id" value="1">
                <x-forms.input :label="__('field.voter_name')" name="name" id="name" isRequired="true" />
                <x-forms.input :label="__('field.voter_nis')" name="email" id="email" isRequired="true" />
                <div class="text-end">
                    <button type="submit" class="btn btn-primary">{{ __('button.save') }}</button>
                </div>
            </form>
        </div>
    </div>
@endsection
