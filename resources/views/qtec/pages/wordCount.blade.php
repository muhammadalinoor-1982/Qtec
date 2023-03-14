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
</div>
</div>
<!--Export Data Table End-->
</div>
@endsection


