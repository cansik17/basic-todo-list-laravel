@extends('layouts')
@section('title')
    Yapılacak işler
@endsection
@section('content')
    <div class="container">
        <div class="col-md-8 mx-auto mt-5">
            <div class="row">
                <h3>App2</h3>
            </div>
            <div class="row ">

                
                    {{-- <form action="{{route('store')}}" method="post">
                    @csrf
                        <input  type="text" name="text" placeholder="Birşeyler yazın!">
                        <button type="submit">Ekle</button>


                    </form> --}}

                    <form action="{{route('store')}}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" name="text" class="form-control" placeholder="bir şeyler yazın..."  aria-describedby="button-addon2">
                        <div class="input-group-append">
                          <button class="btn btn-outline-primary" type="submit" id="button-addon2">Ekle</button>
                        </div>
                      </div>

                    </form>
                 
            </div>
            <br><br>
            <hr>
            <br><br>
            <div class="row">
                <ul class="list-group w-100 ">
                    @foreach ($tasks as $task)
                    <form action="{{route('destroy',$task->id)}}" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit"  title="Sil" class="btn btn-danger btn-sm float-right"><i class="fas fa-times"></i></button>
                    </form>
                         <li class="list-group-item ">
                             <p>
                                 {{$task->text}}
                             </p>   
                        
                            </li>
                          
                    @endforeach
                   
                </ul>
            </div>
        </div>
    </div>


@endsection
