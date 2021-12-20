@extends('layouts/layouts')
@section('title', 'Add Movie')

@section('content')

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
        <div class="row flex-lg-nowrap">
        <div class="col mb-3">
            <div class="e-panel card">
            <div class="card-body">
                <div class="card-title">
                <h6 class="mr-2"><span>Users, </span> Be a wise leader</h6>
                </div>
                <div class="e-table">
                <div class="table-responsive table-lg mt-3">
                    <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="align-top">
                                <div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0">
                                <input type="checkbox" class="custom-control-input" id="all-items">
                                <label class="custom-control-label" for="all-items"></label>
                                </div>
                            </th>
                            <th class="max-width">UserId</th>
                            <th class="max-width">Username</th>
                            <th class="max-width">Name</th>
                            <th class="max-width">Surname</th>
                            <th class="max-width">Blocked</th>
                            <th class="max-width">Payment</th>
                            <th class="max-width">Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="align-middle">
                                <div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
                                <input type="checkbox" class="custom-control-input" id="item-1">
                                <label class="custom-control-label" for="item-1"></label>
                                </div>
                            </td>
                            <td class="text-nowrap align-middle">1</td>
                            <td class="text-nowrap align-middle">ACotter</td>
                            <td class="text-nowrap align-middle">Adam</td>
                            <td class="text-nowrap align-middle">Cotter</td>

                            <td class="text-nowrap align-middle"><input type="checkbox"></input></td>
                            <td class="text-nowrap align-middle">true</td>

                            <td class="text-center align-middle">
                                <div class="btn-group align-top">
                                    <button class="btn btn-sm btn-outline-secondary badge" type="button" data-toggle="modal" data-target="#user-form-modal">Edit</button>
                                </div>
                            </td>
                        </tr> 
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
@endsection