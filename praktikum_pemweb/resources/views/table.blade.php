@extends('layouts.table.main')
@section('container')
           <div class="panel-header panel-header-sm"></div>
                <div class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"> Beverage</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class=" text-primary">
                                                <th> ID </th>
                                                <th> Name </th>
                                                <th> Size </th>
                                                <th> Temperature </th>
                                                <th class="text-right"> Price </th>
                                            </thead>
                                            <tbody> @foreach ($menus as $Menu) <tr>
                                                    <td>{{ $Menu -> id }}</td>
                                                    <td>{{ $Menu -> name }}</td>
                                                    <td>{{ $Menu -> size }}</td>
                                                    <td>{{ $Menu -> temperature }}</td>
                                                    <td class="text-right">{{ 'Rp' . number_format($Menu -> price, 0, '.', '.') }}</td>
                                                </tr> @endforeach </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection