@extends('admin.master')

@section('body')
    <br/>
    <div class="row">
        <div class="col-md-12">
            <div class=" panel panel-default">
                <div class="panel-heading">
                    <h3 class="text-center">Manage Post</h3>
                </div>
                <div class="panel-body">
                    <h3 class="text-center text-success" id="message"> {{ Session::get('message') }}</h3>
                    <table class="table table-bordered table-responsive">
                        <tr class="bg-primary">
                            <th>SL no</th>
                            <th>Name</th>
                           
                            <th>Location</th>
                            <th>Address</th>
                            <th>Rent</th>
                            <th>Phone No</th>
                            <th>Email</th>
                            <th>Type</th>
                            <th>Image</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                        @php($i=1)
                        @foreach($postDetails as $postDetail)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $postDetail-> name}}</td>
                                
                                <td>{{ $postDetail-> location}}</td>
                                <td>{{ $postDetail-> address}}</td>
                                <td>{{ $postDetail-> rent}}</td>
                                <td>{{ $postDetail-> phone_no}}</td>
                                <td>{{ $postDetail-> email}}</td>
                                <td>{{ $postDetail-> type}}</td>

                                <td><img src="{{ asset($postDetail->image1) }}" alt="img" height="60px" width="60px"></td>
                                <td>{{ $postDetail-> publication_status==1 ? 'Published':'Unpublished'}}</td>

                                <td>
                                    <a href="{{ route('view-post-by-admin',['id'=>$postDetail->id]) }}" class="btn btn-success btn-xs">
                                        <span class="glyphicon glyphicon-zoom-in"></span>
                                    </a>
                                    @if($postDetail-> publication_status==1)

                                        <a href="{{ route('unpublished-post',['id'=>$postDetail->id]) }}" class="btn btn-info btn-xs">
                                            <span class="glyphicon glyphicon-arrow-up"></span>
                                        </a>
                                    @else
                                        <a href="{{ route('published-post',['id'=>$postDetail->id]) }}" class="btn btn-warning btn-xs">
                                            <span class="glyphicon glyphicon-arrow-down"></span>
                                        </a>
                                    @endif
                                    <a href="{{ route('edit-post',['id'=>$postDetail->id]) }}" class="btn btn-success btn-xs">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="{{ route('delete-post',['id'=>$postDetail->id]) }}" class="btn btn-danger btn-xs">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    {{ $postDetails->links() }}

                </div>

            </div>
        </div>
    </div>

@endsection