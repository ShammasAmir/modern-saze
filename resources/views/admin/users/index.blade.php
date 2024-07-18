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
                        {{-- <td>{{$user->created_at}}</td> --}}
                        <td>{{$user->Jalali()}}</td>
                        <td><a href="{{route('users.edit', $user->id)}}" class="text-warning text-decoration-none"><i class="fas fa-edit"></i></a></td>
                        {{-- <td><a href="" class="text-danger text-decoration-none"><i class="fas fa-trash"></i></a></td> --}}
                        {{-- <td><button class="text-danger bg-transparent border-0"><i class="fas fa-trash"></i></button></td> --}}
                        {{-- <td>
                            <form action="{{route('users.destroy', $user->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="text-danger bg-transparent border-0"><i class="fas fa-trash"></i></button>
                            </form>
                        </td> --}}
                        <td>
                            {{-- <a href="" class="text-danger text-decoration-none" onclick="destroyUser(event, {{$user->id}})"><i class="fas fa-trash"></i></a> --}}
                            @if((auth()->user()->id !== $user->id) && ($user->role !== 'admin'))
                                <a href="" class="text-danger text-decoration-none" onclick="destroyUser(event, {{$user->id}})"><i class="fas fa-trash"></i></a>
                            @endif
                            <form action="{{route('users.destroy', $user->id)}}" method="POST" id="delete-user-{{$user->id}}">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
        {{$users->links()}}
    </div>
    
@endsection

@section('js')

    @if(Session::has('update'))
        <script>
            Swal.fire({
                // icon: 'success',
                // title: '{{session('update')}}',
                title: 'تبریک',
                text: 'کاربر با موفقیت ویرایش شد',
                confirmButtonText: 'تایید',
            })
        </script>
    @endif

    @if(Session::has('destroy'))
        <script>
            Swal.fire({
                title: 'تبریک',
                text: 'کاربر با موفقیت حذف شد',
                confirmButtonText: 'تایید',
            })
        </script>
    @endif

    {{-- <script>
        Swal.fire({
            title: "آیا مطمئن هستید ؟",
            text: "این عملیات برگشت پذیر نمی باشد !",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "بله ! حذفش کن !",
            cancelButtonText: "لغو",
            }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                title: "تبریک",
                text: "کاربر با موفقیت حذف شد !",
                confirmButtonText: "تایید",
                });
            }
        });
    </script> --}}

    <script>
        function destroyUser(event, id){
            event.preventDefault();
            // alert('test');
            // alert('test : ' + id);

            Swal.fire({
                title: "آیا مطمئن هستید ؟",
                text: "این عملیات برگشت پذیر نمی باشد !",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "بله ! حذفش کن !",
                cancelButtonText: "لغو",
                }).then((result) => {
                if (result.isConfirmed) {
                    document.querySelector('#delete-user-' + id).submit();
                }
            });

            // document.querySelector('#delete-user-' + id).submit();
        }
    </script>

@endsection
