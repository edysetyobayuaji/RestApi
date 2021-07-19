@extends('home')

<div class="page-wrapper">
<div class="page-container">
<div class="main-content">
<div class="container-fluid">
<div class="row">
                            <div class="col-lg-9">
                                <h2 class="title-1 m-b-25">Data Genset</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                    
                                        <thead>
                                            <tr>
                                                <th>date</th>
                                                <th>Tegangan Baterai</th>
                                                <th>RPM</th>
                                                <th>Tegangan Output</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($data as $d)
                                            <tr>
                                                <td>{{$d->created_at}}</td>
                                                <td>{{$d->v_battrey}}VDC</td>
                                                <td>{{$d->rpm}}rpm</td>
                                                <td>{{$d->v_out}}VAC</td>
                                            </tr>
                                            @endforeach
                                            </tbody>
                                        
                                    </table>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
    <
</div>