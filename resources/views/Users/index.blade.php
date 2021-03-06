

<!DOCTYPE html>
<html>

<head>
    <title>PDO - Read Records - PHP CRUD Tutorial</title>

    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

    <!-- custom css -->
    <style>
        .m-r-1em {
            margin-right: 1em;
        }

        .m-b-1em {
            margin-bottom: 1em;
        }

        .m-l-1em {
            margin-left: 1em;
        }

        .mt0 {
            margin-top: 0;
        }
    </style>

</head>

<body>


          {{-- {{App()->getLocale()}} --}}


    <!-- container -->
    <div class="container">


        <div class="page-header">
            <h1>{{ trans('web.r_user')  }}</h1>
            <br>

             {{  session()->get('Message')  }}

             @php
                //   session()->forget(['Message']);
                // session()->flush();
             @endphp


        </div>

         {{ trans('web.welcome').' , '.auth('admin')->user()->name}}
         <br>

        <a href="{{url('/Users/Create')}}">+ {{trans('web.Account')}}</a> || <a href="{{url('/Blog')}}">{{trans('web.blog')}}</a> ||  <a href="{{url('/logout')}}">{{trans('web.logout')}}</a>

       <br>

       <a href="{{url('Lang/en')}}">en</a> || <a href="{{url('Lang/ar')}}">ع</a>



        <table class='table table-hover table-responsive table-bordered'>
            <!-- creating our table heading -->
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Department</th>
                <th>action</th>
            </tr>


            @foreach ($data as  $value)

           <tr>
                 <td>{{$value->id}}</td>
                 <td>{{$value->name}}</td>
                 <td>{{$value->email}}</td>
                 <td>{{$value->title}}</td>
                 <td>
                 <a href='{{url('/Users/remove/'.$value->id)}}' class='btn btn-danger m-r-1em'>Delete</a>
                 <a href='{{url('/Users/edit/'.$value->id)}}' class='btn btn-primary m-r-1em'>Edit</a>

                </td>
           </tr>

           @endforeach

            <!-- end table -->
        </table>

    </div>
    <!-- end .container -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <!-- Latest compiled and minified Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- confirm delete record will be here -->

</body>

</html>




{{--
STUDENTS
name
email
password
cv pdf


requirments
CRUD ...
LOGIN && LOGOUT ...


students ....
Students --}}
