@extends('students.layout')
@section('content')
   <div class="row">
      <div class="col-lg-12 margin-tb">
        <div class="pull-left">
          <h2>Edit students</h2>  
        </div>
        <div class="pull-right">
          <a class="btn btn-primary" href="{{route('students.index')}}">Back</a>

        </div>
     </div>
   </div>
   @if($errors->any())
    <div class="alert alert-danger">
        <strong>oops!</strong>there were some problem with your input.<br><br>
        <ul>
          @foreach($rrrors->all() as $errors)
          <li>{{$error}}</li>
           @endforeach

        </ul>
    </div>
    @endif

    <form action="{{route('sudents.update')}}"  method ="post">
     @csrf 
     @method('PUT') 

     <div class="row">
         <div class=" col-xs-12 col-sm-12 col-md-12">
           <div class="form-group">
             <strong>student-Name:</strong>
             <input type="text" name="stu_name"  value="{{'$student->stu_name'}}" class="form-control" placeholder="name">
           </div>
         </div>
         <div class=" col-xs-12 col-sm-12 col-md-12">
           <div class="form-group">
             <strong>Course:</strong>
             <input type="text" class="form-control" name="course" placeholder="course" value="{{$student->course}}">
             </div>
            </div>
        <div class=" col-xs-12 col-sm-12 col-md-12">
           <div class="form-group">
             <strong>Fee:</strong>
             <input type="text" class="form-control" name="Fee" placeholder="Fee" value="{{$student->fee}}">
           </div>
        </div>
         <div class=" col-xs-12 col-sm-12 col-md-12 text-center"> 
         <button type="submit" class="btn btn-primary">Submit</button>
         </div>
       </div>
    </form>
    @endsection
      