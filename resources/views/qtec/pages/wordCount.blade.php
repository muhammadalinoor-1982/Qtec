@extends('qtec.layout.allPortion.master')
@section('content')
    <div class="row">
        <!--Export Data Table Start-->
        <div class="col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h3 class="title">Word Count</h3>
                </div>
                @php
                    $count_array = array("dada");
                    $string = "tadadattaetadadadafa";
                    echo $string.'<br/><br/>';
                        foreach($count_array as $word)
                        {
                            echo '<b>'.$word.'&nbsp;occurrences are&nbsp;'.substr_count(strtolower($string),$word)."&nbsp;times.</b><br/>";
                        }
                @endphp
                <br><br>
                <p>
                    Documentation about this task: <br>
                    1. First of all Take a Array and mention the value of array <br>
                    2. Then take a string for main text <br>
                    3. Then take a "foreach loop" to travers main text string <br>
                    4. Then check Array value through this function "substr_count(strtolower($string),$word)"
                </p>
</div>
</div>
<!--Export Data Table End-->
</div>
@endsection


