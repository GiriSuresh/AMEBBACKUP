@extends('layouts.super-admin')

@section('content')
    <div id="page-title">
        <h2>Add Parent Page</h2>
    </div>
    <div class="panel">
        <div class="panel-body">
            <div class="example-box-wrapper">
                <form class="form-horizontal bordered-row" method="POST" action="{{ route('parent-page.update', $p_page->id) }}"
                      enctype="multipart/form-data">
                    {{ method_field('patch') }}
                    @include('superadmin.parent-page.form')
                </form>
            </div>
        </div>
    </div>

@stop