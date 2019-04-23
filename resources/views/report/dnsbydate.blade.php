<?php
  $start = $_GET['startday'];
  $end = $_GET['endday'];
?>
@extends('layouts.app')
@section('head-script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
@endsection
@section('content')
<div class="section-header">
  <h1>Report</h1>
  <div class="section-header-breadcrumb">
    <div class="breadcrumb-item active"><a href="#">Report</a></div>
    <div class="breadcrumb-item">DNS Report</div>
  </div>
</div>
<!-- start row1 -->
<div class="row">
  <div class="col-lg-4 col-md-4 col-sm-12">
    <div class="card card-statistic-2">
      <div class="card-stats">
        <div class="card-stats-title">Traffic Statistics</div>
        <div class="card-stats-items">
          <div class="card-stats-item">
            <div class="card-stats-item-count">24</div>
            <div class="card-stats-item-label">Conn</div>
          </div>
          <div class="card-stats-item">
            <div class="card-stats-item-count">12</div>
            <div class="card-stats-item-label">Malicious</div>
          </div>
          <div class="card-stats-item">
            <div class="card-stats-item-count">23</div>
            <div class="card-stats-item-label">Normal</div>
          </div>
        </div>
      </div>
      <div class="card-icon shadow-primary bg-primary">
        <i class="fas fa-archive"></i>
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4>Total Connections</h4>
        </div>
        <div class="card-body">
          59
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-8 col-md-8 col-sm-12">
    <!-- start date  -->
    <!-- card wrapper -->
    <div class="card">
      <!-- card header -->
      <div class="card-header">
        <!-- card title -->
        <h4>Periode</h4>
      </div>
      <!-- card body -->
      <div class="card-body">
        <div class="row">
          <form action="{{ action('ReportController@test') }}" method="get">
            <div class="row">
              <div class="col-md">
                <?php echo "<input type='date' class='form-control' name='startday' value='".date("Y-m-d")."'>"; ?>
              </div>
              <div class="col-md">
                <?php echo "<input type='date' class='form-control' name='endday' value='".date("Y-m-d")."'>"; ?>
              </div>
              <div class="col-md2"></div>
              <div class="col-md2">
                <input class="btn btn-success" type="submit">
              </div>
            </div>
            <!-- <button ><i class="fas fa-submit"></i></button> -->
          </form>
        </div>
        <!-- card footer -->
        <div class="card-footer">
        </div>
      </div>
    </div>
  </div>
  <!-- end row1 -->

</div>

<!-- start row2 -->
<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-12">
    <div class="card">
      <div class="card-header">
        <h4>Top Queried DNS Record</h4>
      </div>
      <div class="card-body p-0">
        <div class="table-responsive table-invoice" style="height: 400px; overflow: auto">
          <table class="table table-striped" id="topDomainQuery">
            <thead>
              <tr>
                <th>Name</th>
                <th>Count</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
        </div>
        <div class="float-right">
          <nav>
            <ul class="pagination">
              <li class="page-item disabled">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                  <span class="sr-only">Previous</span>
                </a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="#">1</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">2</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">3</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                  <span class="sr-only">Next</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-6 col-md-6 col-sm-12">
    <div class="card">
      <div class="card-header">
        <h4>Top RCODE</h4>
      </div>
      <div class="card-body p-0">
        <div class="table-responsive table-invoice" style="height: 400px; overflow: auto">
          <table class="table table-striped" id="topRcode">
            <thead>
              <tr>
                <th>Name</th>
                <th>Count</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
        </div>
        <div class="float-right">
          <nav>
            <ul class="pagination">
              <li class="page-item disabled">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                  <span class="sr-only">Previous</span>
                </a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="#">1</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">2</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">3</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                  <span class="sr-only">Next</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>  
</div>
<!-- end row2 -->

<!-- start row3 -->
<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-12">
    <div class="card">
      <div class="card-header">
        <h4>Top Origin</h4>
      </div>
      <div class="card-body p-0">
        <div class="table-responsive table-invoice" style="height: 400px; overflow: auto">
          <table class="table table-striped" id="toporigin">
            <thead>
              <tr>
                <th>IP Address</th>
                <th>Count</th>
                <th>Detail</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
        </div>
        <div class="float-right">
          <nav>
            <ul class="pagination">
              <li class="page-item disabled">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                  <span class="sr-only">Previous</span>
                </a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="#">1</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">2</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">3</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                  <span class="sr-only">Next</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-6 col-md-6 col-sm-12">
    <div class="card">
      <div class="card-header">
        <h4>Top Responder</h4>
      </div>
      <div class="card-body p-0">
        <div class="table-responsive table-invoice" style="height: 400px; overflow: auto">
          <table class="table table-striped" id="topresponder">
            <thead>
              <tr>
                <th>Name</th>
                <th>Type</th>
                <th>Count</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
        </div>
        <div class="float-right">
          <nav>
            <ul class="pagination">
              <li class="page-item disabled">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                  <span class="sr-only">Previous</span>
                </a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="#">1</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">2</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">3</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                  <span class="sr-only">Next</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>  
</div>
<!-- end row3 -->

<!-- Detailed DNS Record -->
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h4>DNS Record</h4>
        <div class="card-header-action">
          <form>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search">
              <div class="input-group-btn">
                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="card-body p-0">
        <div class="table-responsive table-invoice" style="height: 700px; overflow: auto">
          <table class="table table-striped" id="myTable">
            <thead>
              <tr>
                <td>Date</td>
                <td>Source</td>
                <td>Destination</td>
                <td>Query</td>
                <td>Detail</td>
                <!-- <th>Date</th>
                        <th>uid</th>
                        <th>orig_h </th>
                        <th>orig_p</th>
                        <th>resp_h</th>
                        <th>resp_p</th>
                        <th>proto</th>
                        <th>trans_id</th>
                        <th>query</th>
                        <th>rcode</th>
                        <th>rcode_name</th>
                        <th>AA</th>
                        <th>TC</th>
                        <th>RD</th>
                        <th>RA</th>
                        <th>Z</th>
                        <th>answers</th>
                        <th>TTLs</th>
                        <th>rejected</th> -->
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
        </div>
        <div class="float-right">
          <nav>
            <ul class="pagination">
              <li class="page-item disabled">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                  <span class="sr-only">Previous</span>
                </a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="#">1</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">2</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">3</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                  <span class="sr-only">Next</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Grafik -->
<div class="row">
<div class="col-12 col-sm-12 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Statistics</h4>
                    <div class="card-header-action">
                      <a href="#" class="btn active">Week</a>
                      <a href="#" class="btn">Month</a>
                      <a href="#" class="btn">Year</a>
                    </div>
                  </div>
                  <div class="card-body"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                    <canvas id="myChart2" height="256" width="428" class="chartjs-render-monitor" style="display: block; width: 428px; height: 256px;"></canvas>
                    <div class="statistic-details mt-1">
                      <div class="statistic-details-item">
                        <div class="text-small text-muted"><span class="text-primary"><i class="fas fa-caret-up"></i></span> 7%</div>
                        <div class="detail-value">$243</div>
                        <div class="detail-name">Today</div>
                      </div>
                      <div class="statistic-details-item">
                        <div class="text-small text-muted"><span class="text-danger"><i class="fas fa-caret-down"></i></span> 23%</div>
                        <div class="detail-value">$2,902</div>
                        <div class="detail-name">This Week</div>
                      </div>
                      <div class="statistic-details-item">
                        <div class="text-small text-muted"><span class="text-primary"><i class="fas fa-caret-up"></i></span>9%</div>
                        <div class="detail-value">$12,821</div>
                        <div class="detail-name">This Month</div>
                      </div>
                      <div class="statistic-details-item">
                        <div class="text-small text-muted"><span class="text-primary"><i class="fas fa-caret-up"></i></span> 19%</div>
                        <div class="detail-value">$92,142</div>
                        <div class="detail-name">This Year</div>
                      </div>
                    </div>
                  </div>
                </div>      
              </div>
</div>

@endsection

@section('foot-script')
<script>
    // get top resp
  axios.get('http://localhost:9090/api/dnslogrcodes/<?php echo $start ?>/<?php echo $end ?>')
    .then(function (response) {
      var data = response.data.data
      // handle success
      $.each(data, function (index, value) {
        //  console.log(value);       // READ THE DATA.      
        bindTopRcode(value);
      });
    })
    .catch(function (error) {
      // handle error
      console.log(error);
    })
    .then(function () {
      // always executed
    });
  
  function bindTopRcode(val){
    var name = "<td>" + val.name + "</td>";
    var count = "<td>" + val.value + "</td>";    
    var tableRow = "<tr>" + name + count + "</tr>";
    $('#topRcode tbody').append($(tableRow));
  }

  // get all dnslogs
  axios.get('http://localhost:9090/api/dnslog/<?php echo $start ?>/<?php echo $end ?>/?pageNo=1&size=100')
    .then(function (response) {
      var data = response.data.data
      // handle success
      $.each(data, function (index, value) {
        //  console.log(value);       // READ THE DATA.      
        bindDnslogs(value);
      });
    })
    .catch(function (error) {
      // handle error
      console.log(error);
    })
    .then(function () {
      // always executed
    });
  
  function bindDnslogs(val) {
    // var box = "<td><div class='sort-handler'><i class='fas fa-th'></i></div></td>";
    var ts = "<td>" + val.ts + "</td>";
    var uid = "<td>" + val.uid + "</td>";
    var orig_h = "<td>" + val.id_orig_h + "</td>";
    var orig_p = "<td>" + val.id_orig_p + "</td>";
    var resp_h = "<td>" + val.id_resp_h + "</td>";
    var resp_p = "<td>" + val.id_resp_p + "</td>";
    var proto = "<td>" + val.proto + "</td>";
    var trans_id = "<td>" + val.trans_id + "</td>";
    var query = "<td>" + val.query + "</td>";
    var rcode = "<td>" + val.rcode + "</td>";
    var rcode_name = "<td>" + val.rcode_name + "</td>";
    var AA = "<td>" + val.AA + "</td>";
    var TC = "<td>" + val.TC + "</td>";
    var RD = "<td>" + val.RD + "</td>";
    var RA = "<td>" + val.RA + "</td>";
    var Z = "<td>" + val.Z + "</td>";
    var answers = "<td>" + val.answers + "</td>";
    var TTLs = "<td>" + val.TTLs + "</td>";
    var rejected = "<td>" + val.rejected + "</td>";
    var detail = "<td><a href='#' class='btn btn-primary trigger--fire-modal-1' id='toggle-modal'>Detail</a></td>"

    var headRow = "<tbody> \
                      <tr class='clickable' data-toggle='collapse' aria-expanded='false' aria-controls='group-of-rows-1'> \
                        <td>" + val.ts + "</td> \
          	            <td>" + val.resp_h + "</td> \
                        <td>" + val.orig_h + "</td> \
                        <td>" + val.query + "</td> \
                        <td>+</td> \
                      </tr> \
                    </tbody>";
    var tableRow = "<tr>" + ts + orig_h + resp_h + query + detail + "</tr>";
    var tableRow2 = headRow;
    $('#myTable tbody').append($(tableRow));
  }

  // // get dns total
  // axios.get('http://localhost:9090/api/dnslogtotal/<?php echo $start ?>/<?php echo $end ?>/?pageNo=1&size=100')
  //   .then(function (response) {
  //     var data = response.data.data
  //     // handle success
  //     $.each(data, function (index, value) {
  //       //  console.log(value);       // READ THE DATA.      
  //       bindDnstotal(value);
  //     });
  //   })
  //   .catch(function (error) {
  //     // handle error
  //     console.log(error);
  //   })
  //   .then(function () {
  //     // always executed
  //   });
  // function bindDnstotal(val){
  //   // bind to dns total
  // }

  // get dnslogqueries
  // http://localhost:9090/api/dnslogqueries/2019-04-11/2019-04-11
  axios.get('http://localhost:9090/api/dnslogqueries/<?php echo $start ?>/<?php echo $end ?>')
    .then(function (response) {
      var data = response.data.data
      // handle success
      $.each(data, function (index, value) {
        //  console.log(value);       // READ THE DATA.      
        bindDnsQuery(value);
      });
    })
    .catch(function (error) {
      // handle error
      console.log(error);
    })
    .then(function () {
      // always executed
    });
  
  function bindDnsQuery(val){
    var name = "<td>" + val.name + "</td>";
    var count = "<td>" + val.value + "</td>";
    
    var tableRow = "<tr>" + name  + count + "</tr>";
    $('#topDomainQuery tbody').append($(tableRow));
  }

    // get top origin
  // http://localhost:9090/api/dnslogorigh/2019-04-11/2019-04-11
  axios.get('http://localhost:9090/api/dnslogorigh/<?php echo $start ?>/<?php echo $end ?>')
    .then(function (response) {
      var data = response.data.data
      // handle success
      $.each(data, function (index, value) {
        //  console.log(value);       // READ THE DATA.      
        bindTopOrigin(value);
      });
    })
    .catch(function (error) {
      // handle error
      console.log(error);
    })
    .then(function () {
      // always executed
    });
  
  function bindTopOrigin(val){
    var ip_address = "<td>" + val.name + "</td>";
    var count = "<td>" + val.value + "</td>";
    var detail = "<td><a href='#' class='btn btn-primary trigger--fire-modal-1' id='toggle-modal'>Detail</a></td>"
    
    var tableRow = "<tr>" + ip_address + count + detail + "</tr>";
    $('#toporigin tbody').append($(tableRow));
  }
    
  // get top resp
  axios.get('http://localhost:9090/api/dnslogresph/<?php echo $start ?>/<?php echo $end ?>')
    .then(function (response) {
      var data = response.data.data
      // handle success
      $.each(data, function (index, value) {
        //  console.log(value);       // READ THE DATA.      
        bindTopResp(value);
      });
    })
    .catch(function (error) {
      // handle error
      console.log(error);
    })
    .then(function () {
      // always executed
    });
  
  function bindTopResp(val){
    var ip_address = "<td>" + val.name + "</td>";
    var count = "<td>" + val.value + "</td>";
    var detail = "<td><a href='#' class='btn btn-primary trigger--fire-modal-1' id='toggle-modal'>Detail</a></td>"
    
    var tableRow = "<tr>" + ip_address + count + detail + "</tr>";
    $('#topresponder tbody').append($(tableRow));
  }
  // http://localhost:9090/api/dnslogresph/2019-04-11/2019-04-11
  // script untuk tampilan
  $('#toggle-modal').fireModal({
    title: 'My Modal',
    content: 'Hello!'
  });
</script>
</script>
@endsection