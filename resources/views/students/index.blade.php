@extends('students.layout')
@section('content')
<div class="pull-left">
<h2>students admin panel</h2>
</div>
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-right">
<a class="btn btn-success" href="{{route('students.create')}}">create new students</a>
</div>
</div>
</div>


@if($messege=Session::get('success'))
 <div class ="alert alert-success">
    <p>{{$messege}}</p>
 </div>
 @endif

 <table class="table table-bordered">
    <tr>
      <td>number</td>
      <td>Name</td>
      <td>course</td>
      <td>fee</td>
      <th width="280px">Action</th>
    </tr>
      @foreach($students as $student)

      <tr>
        <td>{{++$i}}</td>
        <td>{{$student->stu_name}}</td>
        <td>{{$student->course}}</td>
        <td>{{$student->fee}}</td>
        <td>
          <form action="{{route('students.destroy',$student->id)}}" method= "post">
              <a class="btn btn-info"  href="{{route('students.show',$student->id)}}">show</a>
              <a class="btn btn-primary"  href="{{route('students.edit',$student->id)}}">Edit</a>
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
 </table>

