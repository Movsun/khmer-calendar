@extends('layouts.app')

@section('content')

  <div style="font-family: Bokor;text-align: center;font-size: 25pt;color: white">ឆ្នាំ{{$data[0]->kh_year}}, ព.ស. {{$data[0]->be_year}}</div>
  <div style="font-family: Bokor;text-align: center;font-size: 25pt;color:white">ខែ{{$data[0]->kh_month}} . ខែ{{$data[count($data)-1]->kh_month}}</div>
  <form class="form-inline" method="post" action="/calendar">
    {!! csrf_field() !!}
    <ul class="pager">
        <li class="previous"><a href="/calendar/{{$previous}}">Previous</a></li>
  <div class="form-group">
    <label class="sr-only" for="year">Year</label>
    <!-- <input type="number" class="form-control" id="year" placeholder="Year" name="year"> -->
    <select class="form-control" id="year" name="year">
      @for($i=1900; $i<3000; $i++)
        <option value="{{$i}}" {{$year == $i? ' selected="selected"': ''}}> {{$i}} </option>
      @endfor
    </select>
  </div>
  <div class="form-group">
    <label class="sr-only" for="month">Month</label>
    <select class="form-control" id="month" name="month">
      @for($i=1; $i<13; $i++)
        <option value="{{$i}}" {{$month == $i? ' selected="selected"': ''}}> {{$i}} </option>
      @endfor
    </select>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
  <li class="next"><a href="/calendar/{{$next}}">Next</a></li>
  </ul>
  </form>


 <br></br>
  <table class="table" >

    <tr bgcolor="white"; style="color:blue;font-family: Bokor;font-size: larger">
      <th class="col-md-1" > អាទិត្យ</th>
      <th class="col-md-1"> ចន្ទ</th>
      <th class="col-md-1">អង្គារ៍</th>
      <th class="col-md-1">ពុធ</th>
      <th class="col-md-1">ព្រហ</th>
      <th class="col-md-1">សុក្រ</th>
      <th class="col-md-1">សៅរ៍</th>
    </tr>

    <!-- <tr> -->

      @for($i=0; $i<6; $i++)
        <tr>
          @for($j=0; $j<7; $j++)
            <td class="table-bordered">
              <div style="height: 75px; overflow:auto; position:relative ;background-color:white; {{$data[$i*7+$j]->date->month != $month ? ' opacity:0.3': ''}};">
                <div style="color: black;font-family: Bokor;" class="text-center  {{$data[$i*7+$j]->is_a_holy_day? 'text-danger': 'text-primary'}}"> {{$data[$i*7+$j]->day_name}} </div>
<!--
                @if($data[$i*7+$j]->isStartOfMonth)
                  <div> ខែ {{$data[$i*7+$j]->khmerMonth}} </div>
                @elseif($data[$i*7+$j]->isEndOfMonth)
                  <div> ដាច់ខែ {{$data[$i*7+$j]->khmerMonth}} </div>
                @endif -->

                <div class="text-center text-primary"; style="color:black;font-family: Bokor"> ខែ{{$data[$i*7+$j]->KhmerMonth->name}} </div>

                <div style="position:absolute; bottom:0; right:0;color:black;font-size: x-large;font-family: 'Times New Roman'" >
                    {{$data[$i*7+$j]->date->day}}
                </div>
                @if($data[$i*7+$j]->is_a_holy_day)
                  <div style="position:absolute; top:0; left:0">
                    <img src="/image/holy_day.png" width="25px" height="25px">
                  </div>
                  <div style="font-family: Bokor; color: red ; font-size: large" class="text-left text-danger ">
                    ថ្ងៃសើល
                  </div>
                @endif
                @foreach($data[$i*7+$j]->events as $event)
                  <div style="font-family: Bokor" class="text-center text-danger">
                    {{$event->kh_name}}
                  </div>
                @endforeach
              </div>
            </td>
          @endfor
        </tr>
      @endfor

      <!-- <td class="table-bordered">
        <div style="height: 100px; overflow:auto; position:relative">
          <div class="text-center text-primary"> 7 រោច </div>
          <div style="position:absolute; top:0; left:0;">
            <img src="image/holy_day.png" width="25px" height="25px">
          </div>
          <div style="position:absolute; bottom:0; right:0;">
              1
          </div>
          <div class="text-center text-danger">
            ថ្ងៃសើល
          </div>
          <div class="text-center text-danger">
            Internation Days
          </div>
        </div> -->


        <!-- <div class="text-right">
            1

        </div>
        <div >
          <span class="pull-left"> 15កើត </span>
          <span class="pull-right"> ថ្ងៃសើល </span>
        </div>
        <div class="clear">
          3
        </div> -->
      <!-- </td> -->
      <!-- <td class="table-bordered"> 2 </td>
      <td class="table-bordered"> 3 </td>
      <td class="table-bordered"> 4 </td>
      <td class="table-bordered"> 5 </td>
      <td class="table-bordered"> 6 </td>
      <td class="table-bordered"> 7 </td>

    </tr> -->

  </table>

@endsection

<script type="text/javascript">

  $(document).ready(function() {
    $('select').select2();
  });
</script>
