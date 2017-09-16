@extends('layouts.super-admin')

@section('content')
    <div id="page-title">
        <h2>Add State</h2>
    </div>
    <div class="panel">
        <div class="panel-body">
            <div class="example-box-wrapper">
                <form class="form-horizontal bordered-row" method="POST" action="{{ route('state.store') }}"
                      enctype="multipart/form-data">
                    @include('superadmin.state.form')
                </form>
            </div>
        </div>
    </div>

@stop