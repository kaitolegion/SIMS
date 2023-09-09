@extends('layouts.admin-layout.app')

@section('contents')
<div class="card">
    <div class="card-body shadow">

        <div class="row">
            <div class="custom-control custom-switch custom-switch-md">
                <div class="col-md-6">
                    <input type="checkbox" name="maintenance" class="custom-control-input" id="customSwitch3">
                    <label class="custom-control-label" for="customSwitch3">System Maintenance</label>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection