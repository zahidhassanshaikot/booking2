@extends('admin.master')
@section('title')
    New Post
@endsection
@section('body')
    <br/>
    <div class="container">
        <div class="row">
            <h5 class="text-center text-success" id="message"> {{ Session::get('message') }}</h5>
            <div class="new-collections-grids">
                <div class="col-md-10 new-collections-grid">
                    {{ Form::open(['route'=>'new-post','method'=>'POST', 'class'=>'form-horizontal', 'enctype'=>'multipart/form-data']) }}

                    <div class="form-group">
                        <label class="control-label col-md-3">Name/Title</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="name"/>
                            <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : ' ' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Type</label>
                        <div class="col-md-9">
                            <select class="form-control" name="type">
                                <option>--- Select type ---</option>
                                    <option value="personal">Personal</option>
                                    <option value="corporate">Corporate</option>
                            </select>
                            <span class="text-danger">{{ $errors->has('type') ? $errors->first('type') : ' ' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Location</label>
                        <div class="col-md-9">
                            <select class="form-control" name="location">
                                <option>--- Select your Location---</option>

                                <option value="Dhaka">Dhaka</option>
                                <option value="chittagong">chittagong</option>
                                <option value="Rajshahi">Rajshahi</option>
                                <option value="Dinajpur">Dinajpur</option>
                                <option value="Rangpur">Rangpur</option>
                                <option value="Khulna">Khulna</option>
                                <option value="Sylhet">Sylhet</option>
                                <option value="Mymensingh">Mymensingh</option>
                                <option value="Barisal">Barisal</option>


                            </select>


                            <span class="text-danger">{{ $errors->has('location') ? $errors->first('location') : ' ' }}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">Address</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="address"/>
                            <span class="text-danger">{{ $errors->has('address') ? $errors->first('address') : ' ' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Rent(hours)</label>
                        <div class="col-md-9">
                            <input type="number" class="form-control" name="rent"/>
                            <span class="text-danger">{{ $errors->has('rent') ? $errors->first('rent') : ' ' }}</span>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-md-3">Phone No</label>
                        <div class="col-md-9">
                            <input type="number" class="form-control" name="phone_no"/>
                            <span class="text-danger">{{ $errors->has('phone_no') ? $errors->first('phone_no') : ' ' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Email</label>
                        <div class="col-md-9">
                            <input type="email" class="form-control" name="email"/>
                            <span class="text-danger">{{ $errors->has('email') ? $errors->first('email') : ' ' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Short Description</label>
                        <div class="col-md-9">
                            <textarea class="form-control" name="short_description"></textarea>
                            <span class="text-danger">{{ $errors->has('short_description') ? $errors->first('short_description') : ' ' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Long Description</label>
                        <div class="col-md-9">
                            <textarea class="form-control" id="editor" name="long_description"></textarea>
                            <span class="text-danger">{{ $errors->has('long_description') ? $errors->first('long_description') : ' ' }}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">Image 1</label>
                        <div class="col-md-9">
                            <input type="file" name="image1" accept="image/*"/>
                            <span class="text-danger">{{ $errors->has('image1') ? $errors->first('image1') : ' ' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Image 2</label>
                        <div class="col-md-9">
                            <input type="file" name="image2" accept="image/*"/>
                            <span class="text-danger">{{ $errors->has('image2') ? $errors->first('image2') : ' ' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Image 3</label>
                        <div class="col-md-9">
                            <input type="file" name="image3" accept="image/*"/>
                            <span class="text-danger">{{ $errors->has('image3') ? $errors->first('image3') : ' ' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Image 4</label>
                        <div class="col-md-9">
                            <input type="file" name="image4" accept="image/*"/>
                            <span class="text-danger">{{ $errors->has('image4') ? $errors->first('image4') : ' ' }}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">Publication status</label>
                        <div class="col-md-9 radio">
                            <label><input type="radio" name="publication_status" value="1"/> Published </label>
                            <label><input type="radio" name="publication_status" value="0"
                                          checked/>Unpublished</label><br/>
                            <span class="text-danger">{{ $errors->has('publication_status') ? $errors->first('publication_status') : ' ' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="Save Post Info"/>
                        </div>
                    </div>
                    {{ Form::close() }}

                </div>

                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <br/>
    <br/>

@endsection