@extends('layouts.app')

@section('content')
    <div class="page">
        <form action="{{route('/')}}" method="POST" class="d-flex">
            {{ csrf_field() }}
            <div>
                <img id="photo" src="#" alt="auction image"/>
                <div class="foto d-block">
                    <label for="auc_pic"><i class="fa-solid fa-cloud-arrow-up"></i>Upload a picture</label>
                    <input name="auc_pic" id="auc_pic" class="img-fluid" type="file" accept="image/jpeg, image/png" width="400" height="510" style="display: none">
                </div>
            </div><
            <div class="contii">
                <div>
                    <div class="form-header">
                        <div class="title">
                            <h1>Create Auction</h1>
                        </div>
                    </div>
                    <div class="input-group">
                        <div>
                            <div class="input-box">
                                <label for="firstname">Auction Name:</label>
                                <input id="firstname" type="text" name="nome" value="" required>
                            </div>
                            <div class="input-box">
                                <label for="firstname">Category:</label>
                                <select id="cats" name="cats">
                                    @foreach($categories as $cat)
                                        <option value="{{$cat->name}}">{{$cat->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="input-box">
                                <label for="desc">Auction Description:</label>
                                <textarea id="desc" name="desc" required></textarea>
                            </div>
                            <div class="input-box">
                                <label for="price">Auction Starting Price:</label>
                                <input id="price" type="number" name="price" step="0.01" min="1" required>
                            </div>
                            <div class="input-box">
                                <label for="firstname">Auction End Date:</label>
                                <input id="enddate2" type="datetime-local" name="enddate" value="" min=""  required>
                            </div>
                            <div class="continue-button">
                                <input type="submit" class="continue-button" value="Save Changes"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
@endsection
