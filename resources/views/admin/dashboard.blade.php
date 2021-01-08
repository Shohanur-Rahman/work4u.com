@extends('layouts.admin_layout')

@section('content')

<div class="row">
    <div class="col-md-6 col-sm-6 col-xs-12 mb-5">
      <div class="card">
      	<div class="card-body">
      		<div id="chart"></div>
      	</div>
      </div>
    </div>
</div>


<script>
        function createChart() {
            $("#chart").kendoChart(

{
                dataSource: {
                    transport: {
                        read: {
                            url: "{{route('get_comments_by_date')}}",
                            dataType: "json"
                        }
                    },
                    sort: {
                        field: "year",
                        dir: "asc"
                    }
                },
                title: {
                    text: "Job Comments By Date"
                },
                legend: {
                    position: "top"
                },
                seriesDefaults: {
                    type: "column"
                },
                series:
                [{
                    field: "jobcomments",
                    categoryField: "job_date",
                    name: "Study"
                }],
                categoryAxis: {
                    labels: {
                        rotation: -90
                    },
                    majorGridLines: {
                        visible: false
                    }
                },
                valueAxis: {
                    labels: {
                        format: "N0"
                    },
                    majorUnit: 20,
                    line: {
                        visible: false
                    }
                },
                tooltip: {
                    visible: true,
                    format: "N0"
                }
            }
            /*{
    title: {
        text: "Kendo Chart Example"
    },
    series: [ {
        name: "Example Series",
        data: [200, 450, 300, 125]
    } ],
    categoryAxis:{
        categories: [ 2000, 2001, 2002, 2003 ]
    }
}*/



);
        }

        $(document).ready(createChart);
        $(document).bind("kendo:skinChange", createChart);
    </script
@endsection