@extends('layouts.super-admin')

@section('content')
    <div id="page-title">
        <h2>Edit Session</h2>

        <p>Update Session - {{ $session->name }}</p>
    </div>

    <div class="panel">
        <div class="panel-body">
            <h3 class="title-hero">
                Basic Information
            </h3>

            <div class="example-box-wrapper">
                <form class="form-horizontal bordered-row" method="POST" action="{{ route('session.update', [$session->id]) }}"
                      enctype="multipart/form-data">
                    {{ method_field('patch') }}
                    @include('superadmin.session.form')
                </form>
            </div>
        </div>
    </div>

@stop