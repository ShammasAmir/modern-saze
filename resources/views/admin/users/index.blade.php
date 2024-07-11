{{-- <h1>users page</h1> --}}

@extends('admin.index')

@section('content')

    <div class="dynamic-content">
        <h2>کاربران سایت</h2>
        <table class="mb-5">
            <tbody>
                <tr>
                    <th>نام</th>
                    <th>ایمیل</th>
                    <th>موبایل</th>
                    <th>نقش کاربری</th>
                    <th>تاریخ عضویت</th>
                    <th>ویرایش</th>
                    <th>حذف</th>
                    
                </tr>
                @foreach ($users as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->mobile}}</td>
                        {{-- <td>{{$user->role}}</td> --}}
                        <td>{{$user->RoleFarsi()}}</td>
                        <td>{{$user->created_at}}</td>
                        <td><a href="{{route('users.edit', $user->id)}}" class="text-warning text-decoration-none"><i class="fas fa-edit"></i></a></td>
                        <td><a href="" class="text-danger text-decoration-none"><i class="fas fa-trash"></i></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{$users->links()}}
    </div>
    
@endsection
