@extends('home')

<div class="page-wrapper">
<div class="page-container">
<div class="main-content">
<div class="container-fluid">
<div class="row">
                            <div class="col-lg-9">
                                <h2 class="title-1 m-b-25">Data UPS</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                    
                                        <thead>
                                            <tr>
                                                <th>date</th>
                                                <th>charge</th>
                                                <th>load</th>
                                                <th>frekuensi</th>
                                                <th>runtime</th>
                                                <th>VinR</th>
                                                <th>VinS</th>
                                                <th>VinT</th>
                                                <th>IinR</th>
                                                <th>IinS</th>
                                                <th>IinT</th>
                                                <th>VoutR</th>
                                                <th>VoutS</th>
                                                <th>VoutT</th>
                                                <th>IoutR</th>
                                                <th>IoutS</th>
                                                <th>Iout</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($data as $d)
                                            <tr>
                                                <td>{{$d->created_at}}</td>
                                                <td>{{$d->charge}}%</td>
                                                <td>{{$d->load}}%</td>
                                                <td>{{$d->frekuensi}}HZ</td> 
                                                <td>{{$d->runtime}}</td> 
                                                <td>{{$d->VinR}}V</td> 
                                                <td>{{$d->VinS}}V</td> 
                                                <td>{{$d->VinT}}V</td> 
                                                <td>{{$d->IinR}}A</td> 
                                                <td>{{$d->IinS}}A</td>
                                                <td>{{$d->IinT}}A</td>
                                                <td>{{$d->VoutR}}V</td> 
                                                <td>{{$d->VoutS}}V</td> 
                                                <td>{{$d->VoutT}}V</td> 
                                                <td>{{$d->IinR}}A</td> 
                                                <td>{{$d->IinS}}A</td> 
                                                <td>{{$d->IinT}}A</td> 

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