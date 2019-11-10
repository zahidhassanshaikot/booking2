@extends('admin.master')

@section('body')
    <br/>

    <div class="col-md-10 col-md-offset-1">
        <div class=" panel panel-default">
            <div class="panel-body">

                <div class="form-group">
                    <label class="control-label col-md-3">Name</label>
                    <div class="col-md-9">
                        <input disabled type="text" class="form-control" name="name" value="{{$appPost->name}}"/>
                        <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : ' ' }}</span>
                    </div>
                </div>
                   <div class="form-group">
                        <label class="control-label col-md-3">Type</label>
                        <div class="col-md-9">
                            <select disabled class="form-control" name="type">
                                <option>--- Select type ---</option>
                                    <option {{ 'personal'==$appPost->type ? 'Selected' : ''}} value="personal">Personal</option>
                                    <option {{ 'corporate'==$appPost->type ? 'Selected' : ''}} value="corporate">Corporate</option>
                            </select>
                            <span class="text-danger">{{ $errors->has('type') ? $errors->first('type') : ' ' }}</span>
                        </div>
                    </div>


                <div class="form-group">
                    <label class="control-label col-md-3">Location</label>
                    <div class="col-md-9">
                        <select disabled class="form-control" name="location">
                            <option>--- Select your Location---</option>

                            <option value="Dhaka" {{ "Dhaka"==$appPost->location ? 'Selected' : ''}}>Dhaka</option>
                            <option value="chittagong" {{ "chittagong"==$appPost->location ? 'Selected' : ''}}>chittagong</option>
                            <option value="Rajshahi" {{ "Rajshahi"==$appPost->location ? 'Selected' : ''}}>Rajshahi</option>
                            <option value="Dinajpur" {{ "Dinajpur"==$appPost->location ? 'Selected' : ''}}>Dinajpur</option>
                            <option value="Rangpur" {{ "Rangpur"==$appPost->location ? 'Selected' : ''}}>Rangpur</option>
                            <option value="Khulna" {{ "Khulna"==$appPost->location ? 'Selected' : ''}}>Khulna</option>
                            <option value="Sylhet" {{ "Sylhet"==$appPost->location ? 'Selected' : ''}}>Sylhet</option>
                            <option value="Mymensingh" {{ "Mymensingh"==$appPost->location ? 'Selected' : ''}}>Mymensingh</option>
                            <option value="Barisal" {{ "Barisal"==$appPost->location ? 'Selected' : ''}}>Barisal</option>


                        </select>
                        <span class="text-danger">{{ $errors->has('location') ? $errors->first('location') : ' ' }}</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Address</label>
                    <div class="col-md-9">
                        <input disabled type="text" class="form-control" value="{{ $appPost->address }}" name="address"/>
                        <input type="hidden" class="form-control" value="{{ $appPost->id }}" name="post_id"/>
                        <span class="text-danger">{{ $errors->has('address') ? $errors->first('address') : ' ' }}</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Rent</label>
                    <div class="col-md-9">
                        <input disabled type="number" class="form-control"value="{{ $appPost->rent }}" name="rent"/>
                        <span class="text-danger">{{ $errors->has('rent') ? $errors->first('rent') : ' ' }}</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Phone No</label>
                    <div class="col-md-9">
                        <input disabled type="number" class="form-control" value="{{ $appPost->phone_no }}" name="phone_no"/>
                        <span class="text-danger">{{ $errors->has('phone_no') ? $errors->first('phone_no') : ' ' }}</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Email</label>
                    <div class="col-md-9">
                        <input disabled type="email" class="form-control"value="{{ $appPost->email }}" name="email"/>
                        <span class="text-danger">{{ $errors->has('email') ? $errors->first('email') : ' ' }}</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Short Description</label>
                    <div class="col-md-9">
                        <textarea disabled class="form-control" name="short_description">{{ $appPost->short_description }}</textarea>
                        <span class="text-danger">{{ $errors->has('short_description') ? $errors->first('short_description') : ' ' }}</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Long Description</label>
                    <div class="col-md-9">
                        <textarea disabled class="form-control" id="editor" name="long_description">{{ $appPost->long_description }}</textarea>
                        <span class="text-danger">{{ $errors->has('long_description') ? $errors->first('long_description') : ' ' }}</span>
                    </div>
                </div>
    

                <div class="form-group">
                    <label class="control-label col-md-3">Image 1</label>
                    <div class="col-md-9">
                        <div class="col-sm-5">
                            <img src="{{ asset($appPost->image1) }}" height="150" width="150" >
                        </div>
                        <span class="text-danger">{{ $errors->has('image1') ? $errors->first('image1') : ' ' }}</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Image 2</label>
                    <div class="col-md-9">
                        <div class="col-sm-5">
                            <img src="{{ asset($appPost->image2) }}" height="150" width="150" >
                        </div>
                        <span class="text-danger">{{ $errors->has('image2') ? $errors->first('image2') : ' ' }}</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Image 3</label>
                    <div class="col-md-9">
                        <div class="col-sm-5">
                            <img src="{{ asset($appPost->image3) }}" height="150" width="150" >
                        </div>
                        <span class="text-danger">{{ $errors->has('image3') ? $errors->first('image3') : ' ' }}</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Image 4</label>
                    <div class="col-md-9">
                        <div class="col-sm-5">
                            <img src="{{ asset($appPost->image4) }}" height="150" width="150" >
                        </div>
                        <span class="text-danger">{{ $errors->has('image4') ? $errors->first('image4') : ' ' }}</span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3">Publication status</label>
                    <div class="col-md-9 radio">
                        <label><input disabled type="radio" name="publication_status" value="1" {{ "1"==$appPost->publication_status ? 'checked' : ''}}/> Published </label>
                        <label><input disabled type="radio" name="publication_status" value="0" {{ "0"==$appPost->publication_status ? 'checked' : ''}}/>Unpublished</label><br/>
                        <span class="text-danger">{{ $errors->has('publication_status') ? $errors->first('publication_status') : ' ' }}</span>
                    </div>
                </div>

            </div>

        </div>
    </div>

@endsection

