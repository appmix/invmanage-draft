@extends('layouts.app')

@section('content')
<div class="uk-section uk-padding-small uk-preserve-color uk-flex uk-child-width-expand">
    <div class="uk-container">
        <div class="uk-card uk-card-default uk-card-body uk-margin-auto uk-width-large uk-width-xlarge@s">
            <ul class="uk-breadcrumb">
                <li><a href="">Path1</a></li>
                <li><a href="">Path2</a></li>
                <li><span>Path3</span></li>
            </ul>

            @yield('content-inner')

        </div>
    </div>
</div>
@endsection