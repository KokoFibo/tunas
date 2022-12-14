@extends('layouts.main')
@section('container')

<div class="container d-flex  justify-content-evenly  mt-2">
    
            <div class="card">
                <div class="card-header">
                  Add Harga Pond
                </div>
                <div class="card-body">
                    <form action="/hargapond/store" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="labelHarga" class="form-label">Label Harga</label>
                            <input type="text" class="form-control" id="labelHarga" placeholder="Min - Rp. 100.000" name="label_harga">
                          </div>
                          <div class="mb-3">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="text" class="form-control" id="harga" placeholder="100, 200..." name="harga_pond">
                          </div>
                        
                        <button name="submit" type="submit" class="btn btn-primary mt-2">Save</button>
                 
                    </form>
                </div>
            </div>
         
            <div class="card" >
                <div class="card-header">
                    Harga Pond
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Label Harga</th>
                                <th>Harga</th>
                                <th></th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($hargapond as $h)
                            <tr>
                                <td>{{ $h->label_harga }}</td>
                                
                                <td>{{ $h->harga_pond }}</td>
                                <td>
                                    <div class="btn-group btn-group-sm " role="group" aria-label="Small button group">
                                        
                                        <form action="/hargapond/{{ $h->id  }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <a href="#" onclick="return confirm('Yakin?')"><button type="submit" class="btn btn-danger badge"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                                <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                                              </svg></button></a>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                                @endforeach
                        </tbody>
                    
                    </table>
                    <a href="/"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-backspace" viewBox="0 0 16 16">
                        <path d="M5.83 5.146a.5.5 0 0 0 0 .708L7.975 8l-2.147 2.146a.5.5 0 0 0 .707.708l2.147-2.147 2.146 2.147a.5.5 0 0 0 .707-.708L9.39 8l2.146-2.146a.5.5 0 0 0-.707-.708L8.683 7.293 6.536 5.146a.5.5 0 0 0-.707 0z"/>
                        <path d="M13.683 1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-7.08a2 2 0 0 1-1.519-.698L.241 8.65a1 1 0 0 1 0-1.302L5.084 1.7A2 2 0 0 1 6.603 1h7.08zm-7.08 1a1 1 0 0 0-.76.35L1 8l4.844 5.65a1 1 0 0 0 .759.35h7.08a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1h-7.08z"/>
                      </svg></a>
                  
                </div>
            </div>
      
</div>

@endsection