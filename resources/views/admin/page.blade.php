@extends('admin.layouts.logged')

@section('title')
    Pages
@endsection

@section('content')
    <div ng-controller="pageCtrl">
    <div class="title page-header">
        <h2>Pages</h2>
    </div>

    {!! Form::open(['url' => '/admin/pages/store', 'autocomplete' => 'off', 'ng-submit' => 'submit(pageForm.$valid)',
                    'id' => 'pageForm', 'name' => 'pageForm', 'novalidate']) !!}
    <div class="row" id="pageData">
        <div class="col-sm-5">
            <div class="form-group{!! ($errors->has('name')) ? ' has-error' : '' !!}"
                 ng-class="{ 'has-error' : pageForm.name.$invalid && !pageForm.name.$pristine }">
                {!! Form::label('name', 'Name', ['class' => 'form-label']) !!}
                {!! Form::text('name', null, ['ng-model' => 'page.name', 'class' => 'form-control', 'required',
                               'ng-model-options' => '{ updateOn: "blur" }']) !!}
                @if ($errors->has('name'))
                    <div class="help-block">{!! $errors->first('name') !!}</div>
                @endif
                <p ng-show="pageForm.name.$invalid && !pageForm.name.$pristine" class="help-block">
                    The name field is required.</p>
            </div>
            <div class="form-group{!! ($errors->has('title')) ? ' has-error' : '' !!}"
                 ng-class="{ 'has-error' : pageForm.title.$invalid && !pageForm.title.$pristine }">
                {!! Form::label('title', 'Title', ['class' => 'form-label']) !!}
                {!! Form::text('title', null, ['ng-model' => 'page.title', 'class' => 'form-control', 'required',
                               'ng-model-options' => '{ updateOn: "blur" }']) !!}
                @if ($errors->has('title'))
                    <div class="help-block">{!! $errors->first('title') !!}</div>
                @endif
                <p ng-show="pageForm.title.$invalid && !pageForm.title.$pristine" class="help-block">
                    The title field is required.</p>
            </div>
            <div class="form-group">
                {!! Form::label('seo_keywords', 'SEO keywords', ['class' => 'form-label']) !!}
                {!! Form::text('seo_keywords', null, ['ng-model' => 'page.seo_keywords', 'class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('seo_description', 'SEO description', ['class' => 'form-label']) !!}
                {!! Form::textarea('seo_description', null, ['ng-model' => 'page.seo_description',
                                   'class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::checkbox('status', 1, ['ng-model' => 'page.status', 'class' => 'form-control']) !!}
                <b>Status</b>
            </div>
        </div>

        <div class="col-sm-6 col-sm-offset-1">
            <div class="form-group{!! ($errors->has('content')) ? ' has-error' : '' !!}">
                {!! Form::label('content', 'Content', ['class' => 'form-label']) !!}
                {!! Form::textarea('content', null, ['ng-model' => 'page.content', 'class' => 'form-control',
                                   'id' => 'page_content']) !!}
                @if ($errors->has('content'))
                    <div class="help-block">{!! $errors->first('content') !!}</div>
                @endif
            </div>
        </div>

        <div class="form-group">
            {!! Form::hidden('ref', '', ['ng-value' => 'page.ref']) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-sm-11">
            <div class="form-group center-block">
                {!! Form::button('Save', ['type' => 'submit', 'class' => 'btn btn-lg btn-primary
                                  center-block save-btn', 'ng-disabled' => 'pageForm.$invalid']) !!}
            </div>
        </div>
    </div>
    {!! Form::close() !!}

    <!--Pages Listing---->
    @include('admin.layouts.list')
    <!--Pages Listing---->
    </div>
@endsection
