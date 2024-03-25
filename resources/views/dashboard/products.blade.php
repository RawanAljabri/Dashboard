@extends('layouts.base')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Add New Product
                </button>

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 text-dark" id="staticBackdropLabel">Add New Product</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                                
                            </div>
                            <div class="modal-body">
                                <form action="{{route('createproducts')}}" method="post">
                                    @csrf
                                    <input type="text" class="form-control" name="Productname">
                                    <button type="submit" class="btn btn-primary mt-3">save</button>
                                    <button type="button" class="btn btn-danger mt-3" data-bs-dismiss="modal">cancel</button>
                                </form>
                                
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5 text-dark">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered table-light">
                            <thead>
                              <tr >
                                <th scope="col">Product ID</th>
                                <th scope="col">Product Name</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $items)
                                    <tr >
                                        <td class="text-dark">{{$items->id}} </td>
                                        <td class="text-dark">{{$items->productname}} </td>
                                    </tr>
                                @endforeach
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection