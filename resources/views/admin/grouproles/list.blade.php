@extends('admin.admin')
@section('content')


<div class="row pt-4">
                <div class="col-sm-12">
                  <!--START - Recent Ticket Comments-->
                  <div class="element-wrapper">
                    <h6 class="element-header">
                      GROUP ROLE
                    </h6>
                    <div class="element-box-tp full-right">
                    {!! Form::open(['method'=>'GET','url'=>'searchgroup_role','role'=>'search'])  !!}
                    <div class="input-search-w ">
                    <input class="form-control rounded bright col-sm-5" name="search" placeholder="Search GroupRole..." type="search">
                    </div>
                    {!! Form::close() !!}
                    <div class="el-buttons-list full-right">
                    <a class="btn btn-white btn-sm" href="{{URL::to('grouproles/create')}}"><i class="os-icon os-icon-delivery-box-2"></i><span>Create New Group Role</span></a>
                  </div>
                </div>
                    <div class="element-box-tp">
                      <div class="table-responsive">
                        <table class="table table-padded">
                          <thead>
                            <tr>
                              <th style="width:  10px;">
                                No
                              </th>
                              <th>
                                Group
                              </th>
                              <th>
                                Role
                              </th>
                              <th colspan="3" align="center">
                                Actions
                              </th>
                            </tr>
                          </thead>
                          <tbody>
                          @foreach($group_role as $i=>$group_roles)
                            <tr>
                              <td>{{ $i+1 }}</td>
                              <td>
                                <div class="user-with-avatar">
                                  <img alt="" src="img/avatar1.jpg"><span>{{ $group_roles->group }}</span>
                                </div>
                                <div class="user-with-avatar">
                                  <img alt="" src="img/avatar1.jpg"><span>{{ $group_roles->role }}</span>
                                </div>
                              </td>
                              <!-- <td class="row-actions" style="width:  10px;">
                                <a href='{{URL::action("Admin\GroupRoleController@show",array($group_roles->id))}}'><i class="os-icon os-icon-grid-10"></i></a>
                               </td> -->
                              <td class="row-actions" style="width:  10px;">
                                <a href='{{URL::action("Admin\GroupRoleController@edit",array($group_roles->id))}}'><i class="os-icon os-icon-ui-44"></i></a>
                                </td>
                              <td class="row-actions" style="width:  10px;">
                                <form id="delete_group_role{{$group_roles->id}}" action='{{URL::action("Admin\GroupRoleController@destroy",array($group_roles->id))}}' method="POST">
								                <input type="hidden" name="_method" value="delete">
								                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <a  class="danger"  href="#" onclick="document.getElementById('delete_group_role{{$group_roles->id}}').submit();"><i class="os-icon os-icon-ui-15"></i></a>
                                </form>
                              </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <!--END - Recent Ticket Comments-->
                </div>
              </div>



@endsection