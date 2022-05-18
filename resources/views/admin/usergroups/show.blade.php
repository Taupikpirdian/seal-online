@extends('admin.admin')

@section('content')
  <section class="content-header">
    <h1>
      User Groups
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active"><a href="{{URL::to('/user-groups')}}">List User Groups</a></li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <table class="table table-striped table-hover">
          <tr>
            <td>ID</td>
            <td>
              {{{$user_group->id}}}
            </td>
          </tr>
          <tr>
            <td width="200px">User</td>
            <td>
              {{{$user_group->user->name}}}
            </td>
          </tr>
          <tr>
            <td width="200px">Group</td>
            <td>
              {{{$user_group->group->name}}}
            </td>
          </tr>
        </table>
      </div>
    </div>
  </section>
@endsection