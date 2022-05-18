@extends('layouts.admin')

@section('content')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
  <div class="layout-w" style="width: 100%;">
    <div class="content-w">
      <!--------------------
      START - Top Bar
      -------------------->
      <!--------------------
      END - Top Bar
      --------------------><!--------------------
      START - Breadcrumbs
      -------------------->
      <ul class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{ url('/admin-dashboard') }}">Home</a>
        </li>
      </ul>
      <!--------------------
      END - Breadcrumbs
      -------------------->
      <div class="content-panel-toggler">
        <i class="os-icon os-icon-grid-squares-22"></i><span>Sidebar</span>
      </div>
      <div class="content-i">
        <div class="content-box">
          <div class="row">
            <div class="col-sm-12">
              <div class="element-wrapper">
                <div class="element-actions">
                  <form class="form-inline justify-content-sm-end">
                    <select class="form-control form-control-sm">
                      <option value="Pending">
                        Today
                      </option>
                      <option value="Active">
                        Last Week 
                      </option>
                      <option value="Cancelled">
                        Last 30 Days
                      </option>
                    </select>
                  </form>
                </div>
                <h6 class="element-header">
                  Admin Dashboard
                </h6>
                <div class="element-content">
                  <div class="row">
                    <div class="col-sm-4 col-xxxl-3">
                      <a class="element-box el-tablo" href="#">
                        <div class="label">
                          Total Pemain
                        </div>
                        <div class="value">
                          57
                        </div>
                      </a>
                    </div>
                    <div class="col-sm-4 col-xxxl-3">
                      <a class="element-box el-tablo" href="#">
                        <div class="label">
                          Player Online
                        </div>
                        <div class="value">
                          457
                        </div>
                      </a>
                    </div>
                    <div class="col-sm-4 col-xxxl-3">
                      <a class="element-box el-tablo" href="#">
                        <div class="label">
                          Total Register
                        </div>
                        <div class="value">
                          125
                        </div>
                      </a>
                    </div>
                    <div class="d-none d-xxxl-block col-xxxl-3">
                      <a class="element-box el-tablo" href="#">
                        <div class="label">
                          Refunds Processed
                        </div>
                        <div class="value">
                          $294
                        </div>
                        <div class="trending trending-up-basic">
                          <span>12%</span><i class="os-icon os-icon-arrow-up2"></i>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--------------------
          START - Chat Popup Box
          -------------------->
          <div class="floated-chat-btn">
            <i class="os-icon os-icon-mail-07"></i><span>Demo Chat</span>
          </div>
          <div class="floated-chat-w">
            <div class="floated-chat-i">
              <div class="chat-close">
                <i class="os-icon os-icon-close"></i>
              </div>
              <div class="chat-head">
                <div class="user-w with-status status-green">
                  <div class="user-avatar-w">
                    <div class="user-avatar">
                      <img alt="" src="{{ url('admin/img/avatar1.jpg') }}">
                    </div>
                  </div>
                  <div class="user-name">
                    <h6 class="user-title">
                      John Mayers
                    </h6>
                    <div class="user-role">
                      Account Manager
                    </div>
                  </div>
                </div>
              </div>
              <div class="chat-messages">
                <div class="message">
                  <div class="message-content">
                    Hi, how can I help you?
                  </div>
                </div>
                <div class="date-break">
                  Mon 10:20am
                </div>
                <div class="message">
                  <div class="message-content">
                    Hi, my name is Mike, I will be happy to assist you
                  </div>
                </div>
                <div class="message self">
                  <div class="message-content">
                    Hi, I tried ordering this product and it keeps showing me error code.
                  </div>
                </div>
              </div>
              <div class="chat-controls">
                <input class="message-input" placeholder="Type your message here..." type="text">
                <div class="chat-extra">
                  <a href="#"><span class="extra-tooltip">Attach Document</span><i class="os-icon os-icon-documents-07"></i></a><a href="#"><span class="extra-tooltip">Insert Photo</span><i class="os-icon os-icon-others-29"></i></a><a href="#"><span class="extra-tooltip">Upload Video</span><i class="os-icon os-icon-ui-51"></i></a>
                </div>
              </div>
            </div>
          </div>
          <!--------------------
          END - Chat Popup Box
          -------------------->
        </div>
      </div>
    </div>
  </div>
  <div class="display-type"></div>
@endsection