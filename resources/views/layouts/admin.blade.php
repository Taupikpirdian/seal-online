<!DOCTYPE html>
<html>
  <head>
    <title>Dashboard</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="template language" name="keywords">
    <meta content="Tamerlan Soziev" name="author">
    <meta content="Admin dashboard html template" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    {!! Html::style('admin/favicon.png') !!}
    {!! Html::style('admin/apple-touch-icon.png') !!}

    {!! Html::style('https://fonts.googleapis.com/css?family=Lato:300,400,700') !!}
    {!! Html::style('admin/bower_components/select2/dist/css/select2.min.css') !!}
    {!! Html::style('admin/bower_components/bootstrap-daterangepicker/daterangepicker.css') !!}
    {!! Html::style('admin/bower_components/dropzone/dist/dropzone.css') !!}
    {!! Html::style('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') !!}
    {!! Html::style('admin/bower_components/fullcalendar/dist/fullcalendar.min.css') !!}
    {!! Html::style('admin/bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css') !!}
    {!! Html::style('admin/bower_components/slick-carousel/slick/slick.css') !!}
    {!! Html::style('admin/css/main.css?version=4.5.0') !!}
    {!! Html::style('admin/icon_fonts_assets/typicons/typicons.css') !!}
    {!! Html::style('admin/icon_fonts_assets/typicons/typicons.css') !!}
    {!! Html::style('font-awesome\css\all.css') !!}
    {!! Html::style('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.3/css/bootstrap-colorpicker.min.css') !!}
    <link href="{{asset('css/sweetalert2.min.css')}}" rel="stylesheet" type="text/css">

  </head>
  <body class="menu-position-side menu-side-left full-screen with-content-panel">
    <div class="all-wrapper with-side-panel solid-bg-all">
      <div class="all-wrapper with-side-panel solid-bg-all">
        <div class="layout-w">
          <!--------------------
          START - Navigation Menu
          -------------------->
          @include('layouts.menu-admin')
          <!--------------------
          END - Navigation Menu
          -------------------->
          @include('sweetalert::alert')
          @yield('content')
          <!--------------------
          START - Color Scheme Toggler
          -------------------->
          <!--------------------
          START - Demo Customizer
          -------------------->
          <div class="floated-customizer-panel">
            <div class="fcp-content">
              <div class="close-customizer-btn">
                <i class="os-icon os-icon-x"></i>
              </div>
              <div class="fcp-group">
                <div class="fcp-group-header">
                  Menu Settings
                </div>
                <div class="fcp-group-contents">
                  <div class="fcp-field">
                    <label for="">Menu Position</label><select class="menu-position-selector">
                      <option value="left">
                        Left
                      </option>
                      <option value="right">
                        Right
                      </option>
                      <option value="top">
                        Top
                      </option>
                    </select>
                  </div>
                  <div class="fcp-field">
                    <label for="">Menu Style</label><select class="menu-layout-selector">
                      <option value="compact">
                        Compact
                      </option>
                      <option value="full">
                        Full
                      </option>
                      <option value="mini">
                        Mini
                      </option>
                    </select>
                  </div>
                  <div class="fcp-field with-image-selector-w">
                    <label for="">With Image</label><select class="with-image-selector">
                      <option value="yes">
                        Yes
                      </option>
                      <option value="no">
                        No
                      </option>
                    </select>
                  </div>
                  <div class="fcp-field">
                    <label for="">Menu Color</label>
                    <div class="fcp-colors menu-color-selector">
                      <div class="color-selector menu-color-selector color-bright selected"></div>
                      <div class="color-selector menu-color-selector color-dark"></div>
                      <div class="color-selector menu-color-selector color-light"></div>
                      <div class="color-selector menu-color-selector color-transparent"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="fcp-group">
                <div class="fcp-group-header">
                  Sub Menu
                </div>
                <div class="fcp-group-contents">
                  <div class="fcp-field">
                    <label for="">Sub Menu Style</label><select class="sub-menu-style-selector">
                      <option value="flyout">
                        Flyout
                      </option>
                      <option value="inside">
                        Inside/Click
                      </option>
                      <option value="over">
                        Over
                      </option>
                    </select>
                  </div>
                  <div class="fcp-field">
                    <label for="">Sub Menu Color</label>
                    <div class="fcp-colors">
                      <div class="color-selector sub-menu-color-selector color-bright selected"></div>
                      <div class="color-selector sub-menu-color-selector color-dark"></div>
                      <div class="color-selector sub-menu-color-selector color-light"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--------------------
          END - Demo Customizer
          -------------------->
          <div class="floated-colors-btn third-floated-btn">
              <div class="os-toggler-w">
                  <div class="os-toggler-i">
                  <div class="os-toggler-pill"></div>
                  </div>
              </div>
              <span>Mode </span><span>Gelap</span>
          </div>
          <div class="floated-customizer-btn third-floated-btn">
            <div class="icon-w">
              <i class="os-icon os-icon-ui-46"></i>
            </div>
            <span>Tampilan</span>
          </div>
          <!--------------------
          END - Color Scheme Toggler
          -------------------->
          <div class="display-type"></div>
        </div>
      </div>
    </div>

    {!! Html::script('admin/bower_components/jquery/dist/jquery.min.js') !!}
    {!! Html::script('admin/bower_components/popper.js/dist/umd/popper.min.js') !!}
    {!! Html::script('admin/bower_components/moment/moment.js') !!}
    {!! Html::script('admin/bower_components/chart.js/dist/Chart.min.js') !!}
    {!! Html::script('admin/bower_components/select2/dist/js/select2.full.min.js') !!}
    {!! Html::script('admin/bower_components/jquery-bar-rating/dist/jquery.barrating.min.js') !!}
    {!! Html::script('admin/bower_components/ckeditor/ckeditor.js') !!}
    {!! Html::script('admin/bower_components/bootstrap-validator/dist/validator.min.js') !!}
    {!! Html::script('admin/bower_components/bootstrap-daterangepicker/daterangepicker.js') !!}
    {!! Html::script('admin/bower_components/ion.rangeSlider/js/ion.rangeSlider.min.js') !!}
    {!! Html::script('admin/bower_components/dropzone/dist/dropzone.js') !!}
    {!! Html::script('admin/bower_components/editable-table/mindmup-editabletable.js') !!}
    {!! Html::script('admin/bower_components/datatables.net/js/jquery.dataTables.min.js') !!}
    {!! Html::script('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') !!}
    {!! Html::script('admin/bower_components/fullcalendar/dist/fullcalendar.min.js') !!}
    {!! Html::script('admin/bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js') !!}
    {!! Html::script('admin/bower_components/tether/dist/js/tether.min.js') !!}
    {!! Html::script('admin/bower_components/slick-carousel/slick/slick.min.js') !!}
    {!! Html::script('admin/bower_components/bootstrap/js/dist/util.js') !!}
    {!! Html::script('admin/bower_components/bootstrap/js/dist/alert.js') !!}
    {!! Html::script('admin/bower_components/bootstrap/js/dist/button.js') !!}
    {!! Html::script('admin/bower_components/bootstrap/js/dist/carousel.js') !!}
    {!! Html::script('admin/bower_components/bootstrap/js/dist/collapse.js') !!}
    {!! Html::script('admin/bower_components/bootstrap/js/dist/dropdown.js') !!}
    {!! Html::script('admin/bower_components/bootstrap/js/dist/modal.js') !!}
    {!! Html::script('admin/bower_components/bootstrap/js/dist/tab.js') !!}
    {!! Html::script('admin/bower_components/bootstrap/js/dist/tooltip.js') !!}
    {!! Html::script('admin/bower_components/bootstrap/js/dist/popover.js') !!}
    {!! Html::script('admin/js/demo_customizer.js?version=4.5.0') !!}
    {!! Html::script('admin/js/main.js?version=4.5.0') !!}
  
    <script src="{{asset('js/sweetalert2.min.js')}}"></script>
    <!-- Bootstrap JavaScript -->
    <!-- Sweeat Alert -->
    <script type="text/javascript">
      if ("{{Session::get('success')}}") {
              Swal.fire(
                  'Success!',
                  "{{Session::get('success')}}",
                  'success'
              )
          }
          if ("{{Session::get('error')}}") {
              Swal.fire(
                  'Oops!',
                  "{{Session::get('error')}}",
                  'error'
              )
          }
    </script>
  </body>
</html>
