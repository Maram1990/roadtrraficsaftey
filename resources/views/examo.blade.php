@extends('layouts.review');
@section('content')
<br>
<br>




<div class="container   mx-auto mt-5">
    <div class="d-flex justify-content-center row">
        <div class="col-md-10 col-lg-10">
            <div class="border">

                <div class="question bg-white p-3 border-bottom">
                    <div class="d-flex flex-row justify-content-between align-items-center mcq">
                        <span>(5 of 20)</span></div>
                </div>
                <div class="question bg-white p-3 border-bottom">
                    <div class="d-flex flex-row align-items-center question-title">

                        <h5 class="mt-1 ml-2">a what</h5>
                    </div>
                </div>

                    <div class="question bg-white p-3 border-bottom">

          <div class="ans ml-2">

          <label class="radio"> <input type="radio" name="brazil" value="brazil"> <span>ryktl</span>
          </label>
          </div><div class="ans ml-2">
          <label class="radio"> <input type="radio" name="Germany" value="Germany"> <span>irykdujtrh</span>
          </label>
          </div><div class="ans ml-2">
          <label class="radio"> <input type="radio" name="Indonesia" value="Indonesia"><span>utjyrst</span>
          </label>
          </div><div class="ans ml-2">
          <label class="radio"> <input type="radio" name="Russia" value="Russia"> <span>ytet</span>
          </label>
          </div>
                </div>
                <div class="d-flex flex-row justify-content-between align-items-center p-3 bg-white"><button class="btn btn-primary d-flex align-items-center btn-danger" type="button"><i class="fa fa-angle-left mt-1 mr-1"></i>&nbsp;previous</button><button class="btn btn-primary border-success align-items-center btn-success" type="button">التالي<i class="fa fa-angle-right ml-2"></i></button></div>
            </div>
        </div>
    </div>
</div>


<br>








@endsection



