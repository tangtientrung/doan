@extends('admin.layouts.index')
@section('css')
<!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="admin/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="admin/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="admin/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="admin/plugins/summernote/summernote-bs4.min.css">
  <!-- datepicker -->
  <!-- <link rel="stylesheet" href="admin/datepicker/main.css">
  <link rel="stylesheet" href="admin/datepicker/base.css">
  <link rel="stylesheet" href="admin/datepicker/docsearch.min.css">
  <link rel="stylesheet" href="admin/datepicker/docsearch.css"> -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
 <!--  <link rel="stylesheet" href="/resources/demos/style.css"> -->
 <!-- morris chart -->
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
@endsection
@section('content')

<!--  -->
@endsection
@section('script')
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<!-- ChartJS -->
<script src="admin/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline
<script src="admin/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->

<!-- jQuery Knob Chart -->
<script src="admin/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="admin/plugins/moment/moment.min.js"></script>
<script src="admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="admin/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="admin/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="admin/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="admin/dist/js/pages/dashboard.js"></script> -->

<!-- datepicker -->
<script src="admin/datepicker/modernizr.custom.2.8.3.min.js"></script>
<script src="admin/datepicker/plugin.js"></script>
<script src="admin/datepicker/main.js"></script>
<!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->

<!-- morris chart -->

<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
<script>
  $( function() {
    $( "#begin" ).datepicker({
      dateFormat:'yy/mm/dd',

    });
    $( "#end" ).datepicker({
      dateFormat:'yy/mm/dd',

    });
  } );
</script>
<script type="text/javascript">
  // $(document).ready(function(){
  //   sortMonth();
  //   function sortMonth(){
             
  //             var token = $('input[name="_token"]').val();
              
  //             $.ajax({
  //                    method:'POST',
  //                    url:'admin/thang',
      
  //                   //datatype: 'JSON',
  //                   dataType: 'json',
  //                   data:{
  //                         _token:token},
  //                   success:function(data){
  //                     // alert(data);
  //                     // //$('#data').val(data);
  //                     // // chart.setData(data);
  //                     // console.log(data);
  //                     // console.log("test");
  //                     chart.setData(data);
  //                     chartLine.setData(data);
  //                     //chart.update(); 
  //                                         }
  //                                         ,
  //       error:function(msg){
  //           alert("Data Failed to Analyze" + msg); 
  //       }
  //                   });
  //   }
  //   var chart=new Morris.Bar({
      
  //       element: 'myfirstchart',
       
  //      parseTime:false,

        
  //       xkey: 'date',
        
  //       ykeys: ['order_qty','sales','coupon','profit'],
        
  //       hideHover:'auto',
       
  //       labels: ['Số đơn','Tổng tiền','Mã giảm giá','Lợi nhuận']
        
  //     });
  //   var chartLine=new Morris.Line({
      
  //       element: 'chartLine',
       
  //      parseTime:false,

        
  //       xkey: 'date',
        
  //       ykeys: ['order_qty','sales','coupon','profit'],
        
  //       hideHover:'auto',
       
  //       labels: ['Số đơn','Tổng tiền','Mã giảm giá','Lợi nhuận']
        
  //     });
  //   $('.filter').click(function(){
  //             var begin = $('#begin').val();
  //             var end = $('#end').val();
  //             var token = $('input[name="_token"]').val();
              
  //             $.ajax({
  //                    method:'POST',
  //                    url:'admin/loc',
      
  //                   //datatype: 'JSON',
  //                   dataType: 'json',
  //                   data:{begin:begin,
  //                         end:end,
  //                         _token:token},
  //                   success:function(data){
  //                     // alert(data);
  //                     // //$('#data').val(data);
  //                     // // chart.setData(data);
  //                     // console.log(data);
  //                     // console.log("test");
  //                     chart.setData(data);
  //                     chartLine.setData(data);
  //                     //chart.update(); 
  //                                         }
  //                                         ,
  //                   error:function(msg){
  //                       alert("Không có dữ liệu"); 
  //                   }
  //                               });
  //             $.ajax({
  //                    method:'POST',
  //                    url:'admin/box',
  //                   data:{begin:begin,
  //                         end:end,
  //                         _token:token},
  //                   success:function(data){
  //                     $('.filter-box').html(data);
  //                                         }
                          
  //                       });
  //                   });
    
  // });
</script>

@endsection