@extends('layouts.layout2')

@section('body')

          <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">Submitted Queries</h5>
                        <table class="table">
                          <thead>
                            <tr>
                              <th>Type</th>
                              <th>Urgency</th>
                              <th>Query</th>
                              <th>Pending</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($queries as $query)
                              <tr>
                                <td>{{ $query->type }}</td>
                                <td>{{ $query->urgency }}</td>
                                <td>{{ $query->query }}</td>
                                <td>{{ $query->status }}</td>
                                <td>
                                    
                                    <form action="{{ action('App\Http\Controllers\CreatorQuery@destroy', $query->URN) }}" method="POST" class="d-inline">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete?');"><i class="fas fa-trash"></i></button>
                                      </form>
                                  </td>
                              </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  
            </div>
          </div>
          
        

        </div>
       
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>   
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js2 -->
@endsection

