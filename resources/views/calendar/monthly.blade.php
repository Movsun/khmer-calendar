@extends('layouts.app')

@section('content')


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


  <table class="table" >

    <tr>
      <th class="col-md-1">Sunday</th>
      <th class="col-md-1">Monday</th>
      <th class="col-md-1">Tueday</th>
      <th class="col-md-1">Wednesday</th>
      <th class="col-md-1">Thurday</th>
      <th class="col-md-1">Friday</th>
      <th class="col-md-1">Saturday</th>
    </tr>

    <!-- <tr> -->

      @for($i=0; $i<6; $i++)
        <tr>
          @for($j=0; $j<7; $j++)
            <td class="table-bordered">
              <div style="height: 75px; overflow:auto; position:relative; {{$data[$i*7+$j]->date->month != $month ? ' opacity:0.5': ''}}">
                <div class="text-center {{$data[$i*7+$j]->is_a_holy_day? 'text-danger': 'text-primary'}}"> {{$data[$i*7+$j]->day_name}} </div>
<!--
                @if($data[$i*7+$j]->isStartOfMonth)
                  <div> ខែ {{$data[$i*7+$j]->khmerMonth}} </div>
                @elseif($data[$i*7+$j]->isEndOfMonth)
                  <div> ដាច់ខែ {{$data[$i*7+$j]->khmerMonth}} </div>
                @endif -->

                <div class="text-center text-primary"> ខែ{{$data[$i*7+$j]->KhmerMonth->name}} </div>

                <div style="position:absolute; bottom:0; right:0;">
                    {{$data[$i*7+$j]->date->day}}
                </div>
                @if($data[$i*7+$j]->is_a_holy_day)
                  <div style="position:absolute; top:0; left:0;">
                    <img src="/image/holy_day.png" width="25px" height="25px">
                  </div>
                  <div class="text-center text-danger">
                    ថ្ងៃសើល
                  </div>
                @endif
                @foreach($data[$i*7+$j]->events as $event)
                  <div class="text-center text-danger">
                    {{$event->kh_name}}
                  </div>
                @endforeach
              </div>
            </td>
          @endfor
        </tr>
      @endfor

      <!-- <td class="table-bordered">
        <div style="height: 100px; overflow:auto; position:relative;">
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