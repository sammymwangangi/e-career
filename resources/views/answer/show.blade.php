@extends('layouts.app')

@section('script')

<!-- script for time limitation of exam -->
<script type="text/javascript">
var timeoutHandle;
function countdown(minutes) {
    var seconds = 60;
    var mins = minutes
    function tick() {
        var counter = document.getElementById("timer");
        var current_minutes = mins-1
        seconds--;
        counter.innerHTML =
        current_minutes.toString() + ":" + (seconds < 10 ? "0" : "") + String(seconds);
        if( seconds > 0 ) {
            timeoutHandle=setTimeout(tick, 1000);
        } else {

            if(mins > 1){

               // countdown(mins-1);   never reach “00″ issue solved:Contributed by Victor Streithorst
               setTimeout(function () { countdown(mins - 1); }, 1000);

            }
        }
    }
    tick();
}

countdown('<?php echo $time; ?>');

</script>

<!-- script for disable url -->
<script type="text/javascript">
    var time= '<?php echo $time; ?>';
    var realtime = time*60000;
    setTimeout(function () {
        alert('Time Out');
        window.location.href= '/';},
   realtime);

    
</script>

<script type="text/javascript">
        $(document).ready(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });

        $('.submitbtn').click(function(e){
            var form = $(this);
            var submit = form.find("[type=submit]");
            var submitOriginalText = submit.attr("value");

            e.preventDefault();
            var data = form.serialize();
            var url = form.attr('action');
            var post = form.attr('method');
            $.ajax({
                type : post,
                url : url,
                data :data,
                success:function(data){
                   submit.attr("value", "Submitted");
                },
                beforeSend: function(){
                   submit.attr("value", "Loading...");
                   submit.prop("disabled", true);
                },
                error: function() {
                    submit.attr("value", submitOriginalText);
                    submit.prop("disabled", false);
                   // show error to end user
                },
            });
        });
    </script>

@endsection




@section('content')
    <div>
        <nav class="col-lg-1 pull-right">
          <div class="sidebar-nav-fixed affix">
            <h1><b>Time <span id="timer" style="color: red">0.00</span></b></h1><br>
          </div>
        </nav>
        {{-- <h1 class="col-lg-offset-4" style="color: red;"><span style="background-color:seagreen;color: white;border-radius: 5px"><b>  Examination on {{$course}}  </b></span></h1> --}}
        <div class="col-md-6 col-lg-6 col-sm-6 col-lg-offset-3" style="background-color: white">
            
        @foreach($questions as $question)
            <div class="col-md-6 col-lg-8 col-sm-6 col-lg-offset-2">
                <form method="post" action="{{route('answer.store')}}" id="ansform">
                	@csrf

                    <h3>{{$question->question}} ?</h3>
                    <div class="col-lg-offset-1">
                        <input type="hidden" name="question" value="{{$question->question}}">
                        <input type="hidden" name="test_id" value="{{$test_id}}">
                        <input type="hidden" name="true_answer" value="{{$question->answer}}">
                        <input name="answer" value="{{$question->option1}}" type="radio"> {{$question->option1}} <br>
                        <input name="answer" value="{{$question->option2}}" type="radio">{{$question->option2}}<br>
                        <input name="answer" value="{{$question->option3}}" type="radio">{{$question->option3}}<br>
                        <input name="answer" value="{{$question->option4}}" type="radio">{{$question->option4}}<br>
                        <input type="submit" name="submit" value="submit" class="btn btn-primary" id="submitbtn">
                    </div>
                 </form>
            </div>
         @endforeach

        </div>
    </div>

@endsection
