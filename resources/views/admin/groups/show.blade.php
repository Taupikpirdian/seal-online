@extends('admin.admin')

@section('content')
  <section class="content-header">
    <h1>
      Groups
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active"><a href="{{URL::to('/groups')}}">List Groups</a></li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <table class="table table-striped table-hover">
          <tr>
            <td>ID</td>
            <td>
              {{{$group->id}}}
            </td>
          </tr>
          <tr>
            <td width="200px">Group</td>
            <td>
              {{{$group->name}}}
            </td>
          </tr>
        </table>
      </div>
    </div>
  </section>
@endsection