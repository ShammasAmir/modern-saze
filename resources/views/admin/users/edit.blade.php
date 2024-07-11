{{-- <h1>edit page</h1> --}}

@extends('admin.index')

@section('content')

    <div class="dynamic-content">
        <h2>ویرایش کاربر</h2>
        
        <form action="{{route('users.update', $user->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">نام</label>
                <input type="text" name="name" id="name" value="{{$user->name}}">
                @error('name')
                    <p class="text-danger my-2">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">ایمیل</label>
                <input type="email" name="email" id="email" value="{{$user->email}}">
                @error('email')
                    <p class="text-danger my-2">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="mobile">موبایل</label>
                <input type="text" name="mobile" id="mobile" value="{{$user->mobile}}">
                @error('mobile')
                    <p class="text-danger my-2">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="role">نقش کاربری</label>
                <select name="role" id="role">
                    <option value="user" @if($user->role==='user') selected @endif>کاربر عادی</option>
                    <option value="author" @if($user->role==='author') selected @endif>نویسنده</option>
                    <option value="admin" @if($user->role==='admin') selected @endif>مدیر سایت</option>
                </select>
                @error('role')
                    <p class="text-danger my-2">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group">
                <input type="submit" class="btn-admin" value="ذخیره">
            </div>
        </form>

    </div>
    
@endsection